    <?php

    require_once 'momento.php';

    $originator = new Originator();
    $caretaker = new Caretaker();

    $originator->setState("State1");
    $caretaker->addMemento($originator->saveToMemento());

    $originator->setState("State2");
    $caretaker->addMemento($originator->saveToMemento());

    $memento1 = $caretaker->getMemento(0);
    $originator->restoreFromMemento($memento1);

    $memento2 = $caretaker->getMemento(1);
    $originator->restoreFromMemento($memento2);
