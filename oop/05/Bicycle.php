<?php

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed = 10;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;

    /**
     * CONSTRUCTOR
     */
    public function __construct(string $color, int $nbWheels)
    {
        $this->color = $color;
        $this->nbWheels = $nbWheels;
    }

    /**
     * METHODS
     */
    public function forward() : string
    {
        $this->currentSpeed;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * GETTERS
     */

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * SETTERS
     */

    /**
     * @param string $color
     * @return void
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }

    public function switchOn() : bool
    {
        return $this->currentSpeed > 10;
    }

    public function switchOff() : bool
    {
        return false;
    }
}