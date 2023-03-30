<?php
require_once 'visitor.php';
$book = new Book("L'Étranger");
$software = new Software("WinRAR");

$visitor = new CopyrightVisitor("Creative Commons");

$book->accept($visitor);
$software->accept($visitor);