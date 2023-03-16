<?php

require_once 'flyweight.php';

$factory = new FlyweightFactory([
    ["Chevrolet", "Camaro2018", "pink"],
    ["Mercedes Benz", "C300", "black"],
    ["Mercedes Benz", "C500", "red"],
    ["BMW", "M5", "red"],
    ["BMW", "X6", "white"],
]);

$factory->listFlyweights();

$flyweight = $factory->getFlyweight(["BMW", "M5", "red"]);
$flyweight->operation(["John Doe"]);

$flyweight = $factory->getFlyweight(["Mercedes Benz", "C300", "black"]);
$flyweight->operation(["Jane Doe"]);

$flyweight = $factory->getFlyweight(["Chevrolet", "Camaro2018", "pink"]);
$flyweight->operation(["Mike"]);

echo "\n";

$factory->listFlyweights();