<?php

interface Subject {
    public function request();
}

class RealSubject implements Subject {
    public function request() {
        echo "Traitement de la requête du sujet réel.\n";
    }
}

class Proxy implements Subject {
    private $realSubject;

    public function request() {
        if ($this->realSubject === null) {
            $this->realSubject = new RealSubject();
        }
        echo "Traitement de la requête du proxy.\n";
        $this->realSubject->request();
    }
}

