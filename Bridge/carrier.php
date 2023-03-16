<?php

interface Carrier {
    public function send();
}
class Mail implements Carrier{
    public function send(){
        echo "Envoi par mail";
    }
}
class Twitter implements Carrier{
    public function send(){
        echo "Envoi par Twitter";
    }
}
class Blog implements Carrier{
    public function send(){
        echo "Envoi par Blog";
    }
}
class Message
{
    protected string $contenu;
    protected Carrier $sender;
    public function __construct(Carrier $sender){
        return $this->sender = $sender;
    }
    public function send(){
        return $this->sender->send();
    }
}