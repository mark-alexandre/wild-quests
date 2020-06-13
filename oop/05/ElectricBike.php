<?php

class ElectricBike extends Vehicle implements RechargeableInterface, LightableInterface
{
    // … i

    public function charge(int $percentage) :int
    {
        // you must implement this method
    }

    public function unLoad(int $percentage) :int
    {
        // you must implement this method
    }

    public function switchOn() : bool
    {
        return true;
    }

    public function switchOff() : bool
    {
        return false;
    }
}