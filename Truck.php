<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $stock;
    private $loading;

    public function __construct(string $color, int $nbSeats, string $energy, int $stock = 0, int $loading = 0)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setStock($stock);
        $this->setLoading($loading);
        echo $this->getStock($loading, $stock);
    }

    public function getStock(int $loading, int $stock): string
    {
        if (($loading) < ($stock))
            return "in filing";
        else
            return "full";
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

}