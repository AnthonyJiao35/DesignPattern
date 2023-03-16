<?php

include_once 'logistics.php';
include_once 'transport.php';

$roadLogistics = new RoadLogistics();

$seaLogistics = new SeaDelivery();

echo $seaLogistics->meanOfTransport();
echo $roadLogistics->meanOfTransport();


$seaLogistics->transport->deliver();