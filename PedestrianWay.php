<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    public $nbLane = 1;
    public $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}