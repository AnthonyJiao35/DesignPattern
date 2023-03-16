<?php

// Interface Menu
interface Menu {
    public function display($depth);
}

// Classe concrète MenuItem
class MenuItem implements Menu {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function display($depth) {
        echo str_repeat('-', $depth) . ' ' . $this->name . "\n";
    }
}

// Classe MenuCollection
class MenuCollection implements Menu {
    private $children = array();

    public function add(Menu $menu) {
        $this->children[] = $menu;
    }

    public function display($depth) {
        foreach ($this->children as $menu) {
            $menu->display($depth + 1);
        }
    }
}