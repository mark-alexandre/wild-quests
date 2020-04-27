<?php

header( "refresh:5;url=index.php" );
echo 'You\'ll be redirected in about 5 secs.';

require_once 'connec.php';

// Retrieves database info
$pdo = new PDO(DSN, USER, PASS);

// Retrieves form datas
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);

// Display warning if fields are empty or more than 45 characters
if (!empty($firstname) && !empty($lastname)) {
    if ((strlen($firstname) < 45) && (strlen($lastname) < 45)) {
        // We defines our query
        $query =
        'INSERT INTO friend (firstname, lastname)
        VALUES (:firstname, :lastname)';

        // We prepare our query
        $statement = $pdo->prepare($query);
        $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);

        // Execution of the query
        $statement->execute();

        // Display of our updated table
        $query = "SELECT * FROM friend";
        $statement = $pdo->query($query);
        $newFriends = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <h1>La liste d'amis a changé! Voici à quoi elle ressemble :</h1>
        <ul>
        <?php
        foreach($newFriends as $newFriend) {
            echo "<li>" . $newFriend['firstname'] . ' ' . $newFriend['lastname'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Soumission du formulaire impossible.</p>";
        echo "<p>Veuillez vérifiez qu'aucun champ ne soit vide ou de plus de 44 caractères.";
    }
}