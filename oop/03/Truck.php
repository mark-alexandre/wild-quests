<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var array
     */
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $actualStorageLvl;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            return $this->energy;
        }
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorageCapacity(): Truck
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): int
    {
        return $this->storageCapacity = $storageCapacity;
    }

    public function isFull($storageCapacity, $actualStorageLvl)
    {
        if ($actualStorageLvl === $storageCapacity) {
            return 'in filling';
        } else {
            return 'full';
        }
    }
}