<?php

require_once 'LightableInterface.php';
require_once 'RechargeableInterface.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';

// Vehicles creation
$car = new Car('red', 5, 'fuel');

/**
 * Test
 */

echo '<h1>Car</h1>';

// Vehicles creation
$car = new Car('red', 5, 'fuel');
$bicycle = new Bicycle('blue', 2);

$bicycle->setCurrentSpeed(5);
var_dump($bicycle->switchOn());
echo '<p>Current speed : ' . $bicycle->getCurrentSpeed() . '</p>';
echo '<p>Lights : ' . $bicycle->switchOn() ?? "Off" . '</p>';
$bicycle->setCurrentSpeed(25);
$bicycle->switchOn();
echo '<p>Current speed : ' . $bicycle->getCurrentSpeed() . '</p>';
echo '<p>Lights : ' . $bicycle->switchOn() ?? "Off" . '</p>';