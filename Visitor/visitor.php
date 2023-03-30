<?php

interface Visitable {
    public function accept(Visitor $visitor);
}

interface Visitor {
    public function visitBook(Book $book);
    public function visitSoftware(Software $software);
}

class Book implements Visitable {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitBook($this);
    }

    public function getTitle() {
        return $this->title;
    }
}

class Software implements Visitable {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function accept(Visitor $visitor) {
        $visitor->visitSoftware($this);
    }

    public function getName() {
        return $this->name;
    }
}

class CopyrightVisitor implements Visitor {
    private $copyright;

    public function __construct($copyright) {
        $this->copyright = $copyright;
    }

    public function visitBook(Book $book) {
        echo "Ajout de la mention de droit d'auteur '{$this->copyright}' pour le livre '{$book->getTitle()}'\n";
    }

    public function visitSoftware(Software $software) {
        echo "Ajout de la mention de droit d'auteur '{$this->copyright}' pour le logiciel '{$software->getName()}'\n";
    }
}
