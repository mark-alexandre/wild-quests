<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    /**
     * addVehicle
     * @param object $vehicle
     * @return object
     */
    final function addVehicle(object $vehicle) {
        if(isset($vehicle) && !empty($vehicle)) {
            if($vehicle instanceof Car) {
                return $this->currentVehicles[] = $vehicle;
            }
        }
    }
}