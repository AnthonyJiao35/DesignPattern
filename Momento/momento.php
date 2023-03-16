<?php

class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}

class Originator
{
    private $state;

    public function setState($state)
    {
        echo "Setting state to: $state\n";
        $this->state = $state;
    }

    public function saveToMemento()
    {
        echo "Saving state to memento\n";
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
        echo "Restoring state from memento: $this->state\n";
    }
}

class Caretaker
{
    private $mementos = [];

    public function addMemento(Memento $memento)
    {
        echo "Adding memento with state: " . $memento->getState() . "\n";
        $this->mementos[] = $memento;
    }

    public function getMemento($index)
    {
        echo "Getting memento with index $index\n";
        return $this->mementos[$index];
    }
}
