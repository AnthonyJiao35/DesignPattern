<?php

require_once 'car.php';

$originalCar = new CarMaker('Toyota', 'Corolla', 2022, 'Blue');

$car1 = $originalCar->clone();
$car1->color = 'Red';

$car2 = $originalCar->clone();
$car2->year = 2021;

echo "<pre>";
print_r($originalCar);
print_r($car1);
print_r($car2);
echo "</pre>";
