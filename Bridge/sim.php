<?php

include 'carrier.php';

$message = new Message(new Mail());
$message->send();
$messageTwitter = new Message(new Twitter());
$message->send();
$messageBlog = new Message(new Blog());
$message->send();
