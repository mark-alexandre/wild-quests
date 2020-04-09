<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /**
     * addVehicle
     * @param object $vehicle
     * @return object
     */
    final public function addVehicle(object $vehicle) {
        if(isset($vehicle) && !empty($vehicle)) {
                return $this->currentVehicles[] = $vehicle;
        }
    }
}