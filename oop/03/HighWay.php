<?php

abstract class HighWay
{

    /**
     * @var array
     */
    protected array $currentVehicles;

    /**
     * @var int
     */
    private int $nbLane;

    /**
     * @var int
     */
    private int $maxSpeed;

    /**
     * Construct
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }

    /**
     * addVehicle
     * @param object $vehicle
     */
    abstract public function addVehicle(object $vehicle);

    /**
     * getters
     */
    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }

    public function getNbLane():int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    /**
     * setters
     * @param array $currentVehicles
     * @return array
     */
    public function setCurrentVehicles(array $currentVehicles):array
    {
        return $this->currentVehicles = $currentVehicles;
    }

    /**
     * @param int $nbLane
     * @return int
     */
    public function setNbLane(int $nbLane):int
    {
        return $this->nbLane = $nbLane;
    }

    /**
     * @param int $maxSpeed
     * @return int
     */
    public function setMaxSpeed(int $maxSpeed):int
    {
        return $this->maxSpeed = $maxSpeed;
    }
}