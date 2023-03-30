<?php

abstract class State
{
    protected $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle();
}

class ConcreteStateA extends State
{
    public function handle()
    {
        echo "Traitement de l'état A...\n";
        $this->context->setState(new ConcreteStateB($this->context));
    }
}

class ConcreteStateB extends State
{
    public function handle()
    {
        echo "Traitement de l'état B...\n";
        $this->context->setState(new ConcreteStateA($this->context));
    }
}

class Context
{
    private $state;

    public function __construct()
    {
        $this->state = new ConcreteStateA($this);
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function request()
    {
        $this->state->handle();
    }
}
