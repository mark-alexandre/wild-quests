<?php

include 'Personne.php';

// Display info about the person
$person = new Personne('Alex', 'Mark', '4 rue des prés 67000 Strasbourg', 1984);
echo $person->getInfo() . '<br>'; // SUCCESS !

// Change the adress, and then display again the info and see if adress has changed
$person->setAdress('8 rue des tilleuls 75000 Paris');
echo $person->getInfo() . '<br>'; // SUCCESS !

// Echo the person age
echo 'J\'ai ' . $person->calculAge(1984) . ' ans.'; // SUCCESS !