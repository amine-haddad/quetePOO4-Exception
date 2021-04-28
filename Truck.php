<?php
require_once 'Vehicle.php';
// Bicycle.php

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',
    ];
    public const ALLOWED_LOADING = ['in filling', 'full'];
    private bool $loading;
    private int $capacity;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function Start()
    {
        echo 'je demarre';
    }

    public function getEnergy(): string

    {

        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void

    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoading()
    {
        
        echo $this->loading;
    }

    public function setLoading(bool $loading): void
    {
        if ($loading === true){
            echo 'In Filling !';
        }else{
            echo 'Is Full!';
        }
    }

    
}
