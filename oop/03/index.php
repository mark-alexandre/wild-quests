<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'SkateBoard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

// Vehicles creation
$skateBoard = new SkateBoard('black', 2);
$bicycle = new Bicycle('blue', 2);
$car = new Car('red', 5, 'fuel');
$car2 = new Car('blue', 4, 'fuel');
$truck = new Truck('black', 2, 'fuel', 145);

/**
 * Test for Motorways
 */
echo "<h1>Motorways Tests</h1>";
$motorway = new MotorWay(2, 130);
// What is happening if we add authorized vehicles ?
echo "<p style='text-transform: uppercase; color: orange;'>What is happening if we add an authorized vehicle ?</p>";
$motorway->addVehicle($car);
var_dump($motorway); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!! An object has been added at key 0.</p>";
echo "<p style='text-transform: uppercase; color: orange;'>And what about a second authorized vehicle ?</p>";
$motorway->addVehicle($car2);
var_dump($motorway); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!!  An object has been added at key 1.</p>";

// What is happening if we add not authorized vehicles ?
echo "<p style='text-transform: uppercase; color: orange;'>And what is happening if we add not authorized vehicles ?</p>";
$motorway->addVehicle($truck);
var_dump($motorway); // Success!!! No errors are displayed during execution, and truck isn't added to the Motorway
echo "<p style='color: forestgreen'>SUCESS !!! No errors are displayed during execution, and truck isn't added to the Motorway.</p>";

/**
 * Test for PedestrianWay
 */
echo "<h1>Pedestrianways Tests</h1>";
$pedestrianWay = new PedestrianWay(1, 20);
// What is happening if we add authorized vehicles ?
echo "<p style='text-transform: uppercase; color: orange;'>What is happening if we add an authorized vehicle ?</p>";
$pedestrianWay->addVehicle($bicycle);
var_dump($pedestrianWay); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!!  An object has been added at key 0.</p>";
echo "<p style='text-transform: uppercase; color: orange;'>And what about a second authorized vehicle ?</p>";
$pedestrianWay->addVehicle($skateBoard);
var_dump($pedestrianWay); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!!  An object has been added at key 1.</p>";

// What is happening if we add not authorized vehicles ?
echo "<p style='text-transform: uppercase; color: orange;'>And what is happening if we add not authorized vehicles ?</p>";
$pedestrianWay->addVehicle($truck);
var_dump($pedestrianWay); // Success!!! No errors are displayed during execution, and truck isn't added to the Pedestrianway
echo "<p style='color: forestgreen'>SUCESS !!! No errors are displayed during execution, and truck isn't added to the Pedestrianway.</p>";

/**
 * Test for Residential Way
 */
echo "<h1>Residentialways Tests</h1>";
$residentialWays = new ResidentialWay(1, 20);
// What is happening if we add authorized vehicles ?
echo "<p style='text-transform: uppercase; color: orange;'>What is happening if we add an authorized vehicle ?</p>";
$residentialWays->addVehicle($bicycle);
var_dump($residentialWays); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!!  An object has been added at key 0.</p>";
echo "<p style='text-transform: uppercase; color: orange;'>And what about a second authorized vehicle ?</p>";
$residentialWays->addVehicle($skateBoard);
var_dump($residentialWays); // Success!!!
echo "<p style='color: forestgreen'>SUCESS !!!  An object has been added at key 1.</p>";