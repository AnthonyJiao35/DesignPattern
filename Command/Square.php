<?php

class Square
{
    private $side;
    private $x;
    private $y;

    public function __construct($side, $x = 0, $y = 0)
    {
        $this->side = $side;
        $this->x = $x;
        $this->y = $y;
    }

    public function setSide($side)
    {
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }
}