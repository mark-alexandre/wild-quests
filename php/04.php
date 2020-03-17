<?php

$indianaSaga = [
    "Indiana Jones et le Royaume du Crâne de Cristal" => [
        "Harrison Ford",
        "Cate Blanchett",
        "Karen Allen",
    ],
    "Indiana Jones et la Dernière Croisade" => [
        "Sean Conn
        ery",
        "Denholm Elliott",
        "John Rhys-Davies",
    ],
    "Indiana Jones et le Temple maudit" => [
        "Kate Capshaw",
        "Jonathan Ke Quan",
        "Amrish Puri",
    ],
];

/**
 * Méthode 1, la plus courte, mais il faut pour cela connaître le nombre
 * d'acteurs.
 */
echo "<H1>Méthode 1</H1>";
foreach ($indianaSaga as $film => $acteurs) {
    echo "<p>Dans le film <strong>" . $film . "</strong> les principaux acteurs
    sont : " . $acteurs[0] . ", " . $acteurs[1] . " and " . $acteurs[2]
    . ".</p>";
}


/**
 * Méthode 2, permettant de prendre en compte n'importe quel nombre d'acteurs
 * . La ponctuation de la dernière boucle change et remplace la virgule par
 * un point.
 */
echo "<H1>Méthode 2</H1>";
foreach ($indianaSaga as $film => $acteurs) {
    echo "<p>Dans le film <strong>" . $film . "</strong>, les principaux acteurs
    sont : ";
    foreach ($acteurs as $key => $actor) {
        $totalActorsNumber = count($acteurs) - 1;
        if( $key !=  $totalActorsNumber) {
            echo $actor . ", ";
        } else {
            echo $actor . ".</p>";
        }
    }
}


/**
 * Méthode 3, alternative à la méthode 2, et utilisant la fonction
 * array_key_last($foo).
 */
echo "<H1>Méthode 3</H1>";
foreach ($indianaSaga as $film => $acteurs) {
    echo "<p>Dans le film <strong>" . $film . "</strong>, les principaux acteurs
    sont : ";
    foreach ($acteurs as $key => $actor) {
        $lastArrayKey = array_key_last($acteurs);
        if( $key !=  $lastArrayKey) {
            echo $actor . ", ";
        } else {
            echo $actor . ".</p>";
        }
    }
}

/**
 * Méthode 4, avec implode('', $foo).
 */
echo "<H1>Méthode 4</H1>";
foreach ($indianaSaga as $film => $acteurs) {
    $resultToDisplay = "<p>Dans le film <strong>" . $film . "</strong> les
    principaux acteurs sont : " . implode(", ", $acteurs) . ".";
    echo $resultToDisplay;
}
