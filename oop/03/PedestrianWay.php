<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
     * addVehicle
     * @param object $vehicle
     * @return Bicycle|object|SkateBoard
     */
    final public function addVehicle(object $vehicle) {
        if(isset($vehicle) && !empty($vehicle)) {
            if ($vehicle instanceof Bicycle || $vehicle instanceof SkateBoard) {
                return $this->currentVehicles[] = $vehicle;
            }
        }
    }
}