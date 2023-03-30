<?php
class SquareCommand implements Command
{
    private $square;
    private $oldSide;
    private $oldX;
    private $oldY;

    public function __construct(Square $square)
    {
        $this->square = $square;
    }

    public function execute()
    {
        $this->oldSide = $this->square->getSide();
        $this->oldX = $this->square->getX();
        $this->oldY = $this->square->getY();


        echo "Dessin d'un carré (côté={$this->square->getSide()}, x={$this->square->getX()}, y={$this->square->getY()})\n";
    }

    public function undo()
    {
        $this->square->setSide($this->oldSide);
        $this->square->setX($this->oldX);
        $this->square->setY($this->oldY);

        echo "Annulation du dessin du carré (côté={$this->oldSide}, x={$this->oldX}, y={$this->oldY})\n";
    }
}