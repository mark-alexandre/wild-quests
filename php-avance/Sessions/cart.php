<?php
session_start();

if (!isset($_SESSION['loginname'])) {
    header('Location: index.php');
}

var_dump($_SESSION);

require 'inc/head.php';
require 'inc/data/products.php' ?>
<section class="cookies container-fluid">
    <div class="row">
        <h1 style="margin-bottom: 50px; text-align: center">Here is the summary of your cart :</h1>
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p style="color: green; font-size: 20px;">Quantity : <?php echo $_SESSION['cart']['item-' . $id]; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
