<?php

require_once 'facade.php';

function clientCode(Facade $facade)
{
    echo $facade->operation();
}

$facade = new Facade(new Subsystem1, new Subsystem2);
clientCode($facade);