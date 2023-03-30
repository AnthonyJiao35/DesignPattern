<?php

// Classe abstraite Writer
abstract class Writer {
    // Une méthode concrète
    public function write() {
        $this->draft();
        $this->review();
        $this->copyright();
    }

    // Des méthodes abstraites
    abstract protected function draft();
    abstract protected function review();
    abstract protected function copyright();
}

// Classe concrète BookWriter
class BookWriter extends Writer {
    protected function draft() {
        echo "Ecriture du premier jet du livre...\n";
    }

    protected function review() {
        echo "Relecture et révision du livre...\n";
    }

    protected function copyright() {
        echo "Ajout de la mention de droit d'auteur pour le livre...\n";
    }
}

// Classe concrète SoftwareWriter
class SoftwareWriter extends Writer {
    protected function draft() {
        echo "Ecriture du code du logiciel...\n";
    }

    protected function review() {
        echo "Test et révision du code du logiciel...\n";
    }

    protected function copyright() {
        echo "Ajout de la mention de droit d'auteur pour le logiciel...\n";
    }
}
