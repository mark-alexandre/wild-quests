<?php

class SkateBoard
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed = 10;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var integer
     */
    private $nbWheels;

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
    public function forward()
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
}