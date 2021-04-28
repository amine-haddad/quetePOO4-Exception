<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake = true;
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',
    ];

    private string $energy;

    private int $energyLevel;



    public function __construct(string $color, int $nbSeats, string $energy) 

    {

        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
        
    }

   

    public function setParkBrake()
    {
        if ($this->hasParkBrake === true){
            $this->hasParkBrake === false;
            echo 'not ok';
        }else{
            $this->hasParkBrake ===true;
            echo 'ok';
        }
        return $this->hasParkBrake;
    }
    
    
    
    
    public function Start()
    {
        if($this->setParkBrake() === FALSE){

            throw new Exception('le frein à main est tiré!');
        }
        return $this->setParkBrake();
    }
    
    
    public function getEnergy(): string

    {

        return $this->energy;
    }

    public function setEnergy(string $energy): Car

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
}
