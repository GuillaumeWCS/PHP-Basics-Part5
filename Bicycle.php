
<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    protected $color;
    protected $bagage;
    protected $currentSpeed;
    protected $nbWheels;

    public function __construct(string $color, int $nbWheels, string $bagage)
    {
        $this->color = $color;
        $this->nbWheels = $nbWheels;
        $this->bagage = $bagage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function forward():string
    {
        $this->currentSpeed = 15;
        return "Go !"."<br>";
    }


    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake bike ! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function switchOn()
    {
        if ($this->currentSpeed > 10)
            return true;
        else
            return false;
    }

    public function switchOff()
    {
        return false;
    }

}


