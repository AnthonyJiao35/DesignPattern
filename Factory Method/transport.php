<?php

abstract class Transport
{
    public string $mean;

    abstract public function deliver(): void;
}


class Truck extends Transport
{
    public function construct()
    {
        $this->mean = ' Road delivery';
    }

    public function deliver(): void
    {
        echo ' livré par camion';
    }
}


class Ship extends Transport
{
    public function construct()
    {
        $this->mean = ' Sea delivery';
    }

    public function deliver(): void
    {
        echo ' livré par bateau';
    }
}
