<?php

class Flyweight
{
    private $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation($uniqueState)
    {
        $s = json_encode($this->sharedState);
        $u = json_encode($uniqueState);
        echo "Flyweight: Exécution de l'opération avec l'état partagé ($s) et l'état unique ($u).\n";
    }
}

class FlyweightFactory
{
    private $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
    }

    private function getKey($state)
    {
        return md5(json_encode($state));
    }

    public function getFlyweight($sharedState)
    {
        $key = $this->getKey($sharedState);
        if (!isset($this->flyweights[$key])) {
            echo "Usine de création : Impossible de trouver un Flyweight, en créer un nouveau.\n";
            $this->flyweights[$key] = new Flyweight($sharedState);
        } else {
            echo "Usine de création : Réutilisation d'un Flyweight existant.\n";
        }

        return $this->flyweights[$key];
    }

    public function listFlyweights()
    {
        $count = count($this->flyweights);
        echo "\nUsine de création : J'ai $count Flyweights :\n";
        foreach ($this->flyweights as $key => $flyweight) {
            echo $key . "\n";
        }
    }
}
