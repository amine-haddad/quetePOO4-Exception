<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
// Bicycle.php

class Bicycle extends Vehicle implements LightableInterface
{
    
   public function switchOn():bool
   {
        if ($this->currentSpeed >10){
            echo 'switchOn';
            return true;
        }else{
            echo 'switchOff';
            return false;
        }
      
   }

   public function switchOff():bool
   {
       return  false;
 
    }

}

