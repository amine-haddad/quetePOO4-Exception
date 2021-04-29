<?php

require 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'LightableInterface.php';

$bike1 = new Bicycle('black', '1');
$bike2 = new Bicycle('green', '1');
$bike3 = new Bicycle('red', '1');
$Car1 = new Car('red', '4', 'fuel');
$Car2 = new Car('blue', '4', 'fuel');
$Car3 = new Car('yellow', '4', 'electric');
$truck = new Truck('black', 12, 'Fuel', 50);

//$Car1->setParkBrake();

$bike1->setCurrentSpeed(11);
$bike1->getCurrentSpeed();
$bike1->switchOn();

