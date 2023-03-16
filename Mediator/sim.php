<?php
require_once 'mediator.php';

$mediator = new ConcreteMediator();

$c1 = new ConcreteComponent1();
$c2 = new ConcreteComponent2();

$mediator->register($c1, 'C1');
$mediator->register($c2, 'C2');

$c1->doA();
$c2->doB();
