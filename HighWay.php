<?php

abstract class HighWay
{
    public $currentVehicles = []; // array
    public $nbLane; // int
    public $maxSpeed; // int

    abstract function addVehicle(Vehicle $vehicle);

}