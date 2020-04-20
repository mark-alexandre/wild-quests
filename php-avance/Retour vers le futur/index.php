<?php

// Departure
$presentTime = new DateTime();
clone($presentTime);
$presentTime = $presentTime->format('M-d-Y - A h:i');
echo "<h1>Deux objets DateTime instanciés :</h1><br>";
echo "<p>Date de départ : $presentTime</p><br>";

// Arrival
$destinationTime = (new DateTime())->setDate('2022', '07', '31');
$destinationTime = $destinationTime->format('M-d-Y - A h:i');
echo "<p>Date de départ : $destinationTime</p><br>";

// Last criteria
$datetime1 = new DateTime();
clone($datetime1);
$datetime2 = (new DateTime())->setDate('2022', '07', '31');
$interval = $datetime1->diff($datetime2);
echo "<p>Intervalle : " . $interval->format('%Y année(s) %m mois, %d jour(s) %h heure(s) %i minute(s)') . "</p>";