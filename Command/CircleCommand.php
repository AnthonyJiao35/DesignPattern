<?php

class CircleCommand implements Command
{
    private $circle;
    private $oldRadius;
    private $oldX;
    private $oldY;

    public function __construct(Circle $circle)
    {
        $this->circle = $circle;
    }

    public function execute()
    {
        $this->oldRadius = $this->circle->getRadius();
        $this->oldX = $this->circle->getX();
        $this->oldY = $this->circle->getY();

        echo "Dessin d'un cercle (rayon={$this->circle->getRadius()}, x={$this->circle->getX()}, y={$this->circle->getY()})\n";
    }

    public function undo()
    {
        $this->circle->setRadius($this->oldRadius);
        $this->circle->setX($this->oldX);
        $this->circle->setY($this->oldY);

        echo "Annulation du dessin du cercle (rayon={$this->oldRadius}, x={$this->oldX}, y={$this->oldY})\n";
    }
}