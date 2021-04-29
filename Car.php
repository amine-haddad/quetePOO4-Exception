<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
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

   public function switchOn():bool
   {
      return true;
   }

   public function switchOff():bool
   {
       return false;
   }
    
    public function Start()
    {
        if($this->hasParkBrake === false){
        
            throw new Exception('le frein à main est tiré!');
        }
        echo'je demare!';
    }
    public function setParkBrake()
    {
        
        return $this->hasParkBrake;
    }

    public function getParkBrake(){

        if ($this->hasParkBrake === true){
            echo 'le frein a main est tiréeee';
            
        }else{
        
            echo 'le frein à main est desserré';
        }
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
