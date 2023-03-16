<?php

class CarMaker
{
    public $make;
    public $model;
    public $year;
    public $color;

    public function __construct($make, $model, $year, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function clone(): CarMaker
    {
        return new CarMaker($this->make, $this->model, $this->year, $this->color);
    }
}
