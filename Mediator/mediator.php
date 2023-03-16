<?php

interface Mediator
{
    public function notify(object $sender, string $event): void;
}

class ConcreteMediator implements Mediator
{
    private $components = [];

    public function register(Component $component, string $name): void
    {
        $component->setMediator($this);
        $this->components[$name] = $component;
    }

    public function notify(object $sender, string $event): void
    {
        foreach ($this->components as $name => $component) {
            if ($sender !== $component) {
                $component->receive($event);
            }
        }
    }
}

abstract class Component
{
    protected $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function send(string $event): void
    {
        $this->mediator->notify($this, $event);
    }

    abstract public function receive(string $event): void;
}

class ConcreteComponent1 extends Component
{
    public function doA(): void
    {
        // ...
        $this->send('A');
    }

    public function receive(string $event): void
    {
        echo "ConcreteComponent1: J'ai reçu un événement '$event'.\n";
    }
}

class ConcreteComponent2 extends Component
{
    public function doB(): void
    {
        // ...
        $this->send('B');
    }

    public function receive(string $event): void
    {
        echo "ConcreteComponent2: J'ai reçu un événement '$event'.\n";
    }
}