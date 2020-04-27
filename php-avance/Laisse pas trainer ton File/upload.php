<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>

<div class="container text-center mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-12 mt-4 mb-4">
            <h1>Bibliothèque d'images</h1>
        </div>
        <form class="border p-4" method="POST" action="upload.php" enctype="multipart/form-data">
            <!-- On limite le fichier à 100Ko -->
            <input type="hidden" name="MAX_FILE_SIZE" value="999999">
            Fichier : <input type="file" name="avatar[]" multiple>
            <input type="submit" name="envoyer" value="Envoyer le fichier">
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php

        // Tricky function to redirect because header() kinda sucks sometimes
        function redirect($url)
        {
            if (!headers_sent()) {
                header('Location: '.$url);
                exit;
            } else {
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.$url.'";';
                echo '</script>';
                echo '<noscript>';
                echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
                echo '</noscript>'; exit;
            }
        }

        // Defines several parameter needed for the upload process
        $uploadDir = 'upload/';
        $maxSize = 999999;

        // Defines the accepted extensions
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $iterator = new FilesystemIterator($uploadDir, FilesystemIterator::SKIP_DOTS);

        // Display each files in the folder with caption
        $i = 0;
        foreach($iterator as $file) {?>
            <form method="post" class="col-4">
                <figure class="figure text-center">
                    <img src="<?php echo $file->getpathname(); ?>"
                         class="img-responsive img-thumbnail figure-img img-fluid rounded mx-auto"
                         alt="..." style="width: 200px; height: 200px; object-fit: cover;">
                    <figcaption class="figure-caption text-center"><?php echo $file->getfilename(); ?></figcaption>
                    <input name="<?php echo "img-$i"; ?>" class="btn btn-danger" type="submit" value="Delete me!">

                    <?php
                    //Deletion management
                    if($_POST['img-'.$i] === 'Delete me!' && file_exists($uploadDir . $file->getfilename())) {
                        $fileToDelete = $uploadDir . $file->getfilename();
                        unlink($fileToDelete);
                        redirect($_SERVER['HTTP_REFERER']);
                    }

                    ?>
                </figure>
            </form><?php
            $i++;
        } ?>
    </div>
</div>

<?php

$root = $_SERVER["DOCUMENT_ROOT"];
$dir = $root . '/upload/';

if (!function_exists('mkdir_r')) {
    /**
     * create directory recursively
     * @param $dirName
     * @param int $rights
     * @param string $dir_separator
     * @return bool
     */
    function mkdir_r($dirName, $rights = 0744, $dir_separator = DIRECTORY_SEPARATOR) {
        $dirs = explode($dir_separator, $dirName);
        $dir = '';
        $created = false;
        foreach ($dirs as $part) {
            $dir .= $part . $dir_separator;
            if (!is_dir($dir) && strlen($dir) > 0) {
                $created = mkdir($dir, $rights);
            }
        }
        return $created;
    }
}

if (!function_exists('ensure_dir')) {
    /**
     * ensure directory exist if not create
     * @param $dir_path
     * @param int $mode
     * @param bool $use_mask
     * @param int $mask
     * @return bool
     */
    function ensure_dir($dir_path, $mode = 0744, $use_mask = true, $mask = 0002) {
        // set mask
        $old_mask = $use_mask && $mask != null
            ? umask($mask)
            : null;
        try {
            return is_dir($dir_path) || mkdir_r($dir_path, $mode);
        } finally {
            if ($use_mask && $old_mask != null) {
                // restore original
                umask($old_mask);
            }
        }
    }
}

// Create the upload dir if it doesn't exist
if (!mkdir("./upload", 0777, true) && !is_dir("./upload")) {
    throw new \RuntimeException(sprintf('Directory "%s" was not created', "./upload"));
}


if(isset($_POST) && !empty($_POST)) {

    // Count total files
    $countFiles = count($_FILES['avatar']['name']);

    // Looping all files
    for ($i = 0; $i < $countFiles; $i++) {
        // We check the size
        $size = filesize($_FILES['avatar']['tmp_name'][$i]);
        // Then the extension
        $extension = strrchr($_FILES['avatar']['name'][$i], '.');
        // We set a unique filename for each one
        $destFileName = uniqid('img-', true);

        // Security check
        if (!in_array($extension, $extensions))
        {
            $error = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg...';
        }
        if ($size > $maxSize) {
            $error = 'Le fichier est trop gros...';
        }

        if (!isset($error))
        {

            if (move_uploaded_file($_FILES['avatar']['tmp_name'][$i], $uploadDir . $destFileName . $extension))
            {
                if ($i === $countFiles-1) {
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                echo '<div class="container mb-4">
                        <div class="row justify-content-center">
                            Echec de l\'upload !
                        </div>
                    </div>';
            }
        } else {
            echo $error;
        }
    }
}

?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
