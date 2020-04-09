<?php

require_once 'Truck.php';

// Truck #1
$truck1 = new Truck('red', 3, 'fuel', 45);
var_dump($truck1); // Test passed

// Truck #2
$truck2 = new Truck('green', 2, 'gazoil', 145);
var_dump($truck2); // Test passed

// Truck #3
$truck3 = new Truck('red', 4, 'gt', 45);
var_dump($truck3); // Test passed, energy is out of the array but doesn't generate error (NULL instead for its value)
$truck3->setEnergy('fuel');
var_dump($truck3); // Test passed, energy switched from NULL to 'fuel'