<?php
require_once 'Command.php';
require_once 'CircleCommand.php';
require_once 'SquareCommand.php';
require_once 'Drawing.php';
require_once 'Circle.php';
require_once 'Square.php';

// Créer un dessin
$drawing = new Drawing();
 
// Ajouter une commande pour dessiner un cercle
$circle = new Circle();
$circleCommand = new CircleCommand($circle);
$drawing->executeCommand($circleCommand);
 
// Ajouter une commande pour dessiner un carré
$square = new Square(10);
$squareCommand = new SquareCommand($square);
$drawing->executeCommand($squareCommand);
 
// Annuler la dernière commande (carré)
$drawing->undo();

 // Refaire la dernière commande annulée (dessiner un carré)
$drawing->redo();

// Modifier le cercle
$newRadius = 10;
$newX = 5;
$newY = 5;
$circle->setRadius($newRadius);
$circle->setX($newX);
$circle->setY($newY);

// Ajouter une commande pour modifier le cercle
$modifiedCircleCommand = new CircleCommand($circle);
$drawing->executeCommand($modifiedCircleCommand);

// Annuler la dernière commande (modifier le cercle)
$drawing->undo();

// Annuler la commande précédente (dessiner un carré)
$drawing->undo();

// Refaire les deux dernières commandes annulées (dessiner un carré et modifier le cercle)
$drawing->redo();
$drawing->redo();

