<?php

include_once 'transport.php';

abstract class Logistics
{

    public Transport $transport;

    public function meanOfTransport()
    {
        return $this->transport->mean;
    }

}

class RoadLogistics extends Logistics
{
    public function construct()
    {
        $this->transport = new Truck();
    }
}

class SeaDelivery extends Logistics
{
    public function construct()
    {
        $this->transport = new Ship();
    }
}
