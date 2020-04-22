<?php

require_once 'Vehicle.php';
require_once 'Car.php';

// Vehicles creation
$car = new Car('red', 5, 'fuel');

/**
 * Test
 */

echo '<h1>Exceptions handling</h1>';
try {
    $car->setParkBrake(15);
    echo $car->start();
} catch (Exception $e){
    print_r($e);
} finally {
    $car->setParkBrake(false);
    echo "<p> Auto-resolving the issue for you! We have set your parkbrake at false! <p><br>" . $car->start();
}