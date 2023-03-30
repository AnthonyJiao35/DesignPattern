<?php

class Circle
{
    private $x;
    private $y;
    private $radius;

    public function __construct($x = 0, $y = 0, $radius = 1)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}