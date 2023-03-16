<?php

interface Component {
    public function operation(): string;
}

class ConcreteComponent implements Component {
    public function operation(): string {
        return "Je suis un composant concret.";
    }
}

abstract class Decorator implements Component {
    protected $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation(): string {
        return $this->component->operation();
    }
}


class ConcreteDecoratorA extends Decorator {
    public function operation(): string {
        return "Décorateur A " . parent::operation();
    }
}

class ConcreteDecoratorB extends Decorator {
    public function operation(): string {
        return "Décorateur B " . parent::operation();
    }
}