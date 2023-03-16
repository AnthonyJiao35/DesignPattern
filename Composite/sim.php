<?php
require_once 'composite.php';

// Instancier des MenuItem
$item1 = new MenuItem('Item 1');
$item2 = new MenuItem('Item 2');
$item3 = new MenuItem('Item 3');

// Instancier des MenuCollection
$collection1 = new MenuCollection();
$collection2 = new MenuCollection();

// Ajouter des MenuItem aux MenuCollection
$collection1->add($item1);
$collection1->add($item2);
$collection2->add($item3);
$collection1->add($collection2);

// Afficher le menu
$collection1->display(0);
