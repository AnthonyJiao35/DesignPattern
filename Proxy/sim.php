<?php

require_once 'proxy.php';

// Création d'un objet Proxy
$proxy = new Proxy();

// Appel de la méthode request() du proxy, qui délègue la requête à l'objet réel
$proxy->request();