<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public $nbLane = 4;
    public $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}