<?php

require 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$bike1 = new Bicycle('black', '1');
$bike2 = new Bicycle('green', '1');
$bike3 = new Bicycle('red', '1');
$Car1 = new Car('red', '4', 'fuel');
$Car2 = new Car('blue', '4', 'fuel');
$Car3 = new Car('yellow', '4', 'electric');
$truck = new Truck('black', 12, 'Fuel', 50);

//$Car1->setParkBrake();
echo $Car1->Start();

echo 'je demarre';
echo $Car1->forward();
echo $Car1->setCurrentSpeed(150);
echo '<br> Vitesse de la voiture: ' . $Car1->getCurrentSpeed() . ' km/h' . '<br>';

echo $Car1->brake();

echo '<br> Vitesse de la voiture : ' . $Car1->getCurrentSpeed() . ' km/h' . '<br>';

echo $Car1->brake() . '<br>';

echo $bike1->forward();
echo $bike1->setCurrentSpeed(30);
echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake();

echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake() . '<br>';

$car = new Car('green', 4, 'electric');

echo $car->forward();

//var_dump($car);

//var_dump(Car::ALLOWED_ENERGIES);

//var_dump($truck);
//var_dump(Truck::ALLOWED_LOADING);

echo $truck->Start();
echo $truck->forward();
echo $truck->setCurrentSpeed(70);
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse de la camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake() . '<br>';
echo  'contôle chargement: ';
echo $truck->setLoading(true). '<br>';
//var_dump($e);

echo $Car1->start(). '<br>';
echo $Car1->getParkBrake(). '<br>';


try {
    //code...
    $Car1->Start();
} catch (Exception $e) {
    //throw $th;
    $Car1->getParkBrake();
    echo $e->getMessage();
    $Car1->setParkBrake()===true;
} finally {
    echo 'Ma voiture roule comme un donut'. '<br>';
}
echo $Car1->getParkBrake(). '<br>';
