<?php

// Inclusion of our 2 classes : Bicyle and Car
require_once 'Bicycle.php';
require_once 'Car.php';

/**
 * BICYCLE EXAMPLE (instanciation need 1 parameter)
 */

// Creation of a new Bicycle object with a current speed of 10 kmh/h
$bike = new Bicycle('red');
$bike->setCurrentSpeed(10);
$bike2 = new Bicycle('blue');
$bike2->setCurrentSpeed(15);

// Print of the result
echo "<h1>Bike example</h1>";
echo $bike->forward();
echo '<br> Bike\'s speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike\'s speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo "<br><br>";
echo "<h1>Bike example</h1>";
echo $bike2->forward();
echo '<br> Bike\'s speed : ' . $bike2->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike2->brake();
echo '<br> Bike\'s speed : ' . $bike2->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike2->brake();
echo "<br><br>";

/**
 * CAR EXAMPLES (instanciation need 3 parameters)
 */

// Example #1 : with the car already running
$car = new Car('blue', 7, 'gas');
$car->setCurrentSpeed(30);

// Print of the result
echo "<h1>Car example #1</h1>";
$ifStarted = $car->start();
if ($ifStarted === 0)
{
    echo "Your are driving, and this means your car is already started! Please stop alcohol dude ;-)";
}
else if ($ifStarted === 2)
{
    echo "You gas tank is empty, and your car is just stucked here! Good luck dude ;-)";
} else
{
    $car->start();
    echo $car->forward();
    echo '<br> Car\'s speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo '<br> Car\'s speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo "<br><br>";
}

// Example #2 : with the car stopped
$car2 = new Car('red', 5, 'gazoil');
$car2->setCurrentSpeed(0);

// Print of the result
echo "<h1>Car example #2</h1>";
$ifStarted2 = $car2->start();
var_dump($car2);
if ($ifStarted2 === 0)
{
    echo "Your are driving, and this means your car is already started! Please stop alcohol dude ;-)";
}
else if ($ifStarted2 === 2)
{
    echo "You gas tank is empty, and your car is just stucked here! Good luck dude ;-)";
}
else
{
    $car2->setCurrentSpeed(30);
    echo $car2->forward();
    echo '<br> Car\'s speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car2->brake();
    echo '<br> Car\'s speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car2->brake();
    echo "<br><br>";
}

// Example #3 : with the car stopped
$car3 = new Car('yellow', 2, 'electricity');
$car3->setEnergyLevel(0);

// Print of the result
echo "<h1>Car example #3</h1>";
$ifStarted3 = $car3->start();
if ($ifStarted3 === 0)
{
    echo "Your are driving, and this means your car is already started! Please stop alcohol dude ;-)";
}
else if ($ifStarted3 === 2)
{
    echo "You gas tank is empty, and your car is just stucked here! Good luck dude ;-)";
}
else
{
    $car3->start();
    echo $car3->forward();
    echo '<br> Car\'s speed : ' . $car3->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car3->brake();
    echo '<br> Car\'s speed : ' . $car3->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car3->brake();
    echo "<br><br>";
}