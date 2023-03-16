<?php

require_once 'singleton.php';

function clientCode()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Le Singleton fonctionne, les deux variables contiennent la même instance.";
    } else {
        echo "Le Singleton a échoué, les variables contiennent des instances différentes.";
    }
}

clientCode();
