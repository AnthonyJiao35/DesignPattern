<?php

// Classe observable
class Subject {
    // Liste des observateurs
    private $observers = [];

    // Ajoute un observateur à la liste
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    // Supprime un observateur de la liste
    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    // Notifie les observateurs d'un changement
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}