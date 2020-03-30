<?php
require_once 'connec.php';

/**
 * I have decided to process the form in a thanks.php file
 * in order to only execute the code if conditions are met.
 */

// Retrieves database info
$pdo = new \PDO(DSN, USER, PASS);
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

// Display of the friends list
?>
<h1>Liste des amis :</h1>
<ul>
<?php
foreach($friends as $friend) {
    echo "<li>" . $friend['firstname'] . ' ' . $friend['lastname'] . "</li>";
}
echo "</ul>";

// Form's display
?>
<form action="thanks.php" method="post">
    <div>
        <label for="firstname">Nom :</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="lastname">Prénom :</label>
        <input type="text" id="lastname" name="lastname" required>
    </div>
    <div class="button">
        <button type="submit">Ajouter cet ami</button>
    </div>
</form>