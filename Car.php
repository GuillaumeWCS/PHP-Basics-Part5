
<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $hasParkBrake = true;
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getPartBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        try {
            if ($this->getPartBrake())
                throw new Exception("Le frein à main est actif !");
        }

        catch (Exception $exc) {
            echo "Exception reçue : ",  $exc->getMessage(), "\n";
            $this->setParkBrake(false);
        }

        finally {
            echo "Ma voiture roule comme un donut";
        }
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}


