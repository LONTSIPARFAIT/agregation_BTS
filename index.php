<?php
class Moteur {
    public $puissance;

    public function __construct($puissance) {
        $this->puissance = $puissance;
    }
}

class Voiture {
    public $moteurs = [];

    public function ajouterMoteur($moteur) {
        $this->moteurs[] = $moteur;
    }
}

// Création des moteurs
$moteur1 = new Moteur(160);
$moteur2 = new Moteur(180);

// Agrégation : ajout des moteurs à la voiture
$voiture = new Voiture();
$voiture->ajouterMoteur($moteur1);
$voiture->ajouterMoteur($moteur2);

print_r($voiture);




