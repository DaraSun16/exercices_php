<?php

class Rectangle {
    private $largeur;
    private $hauteur;

    // Constructeur
    public function __construct($largeur, $hauteur) {
        $this->setLargeur($largeur);
        $this->setHauteur($hauteur);
    }

    // Getter largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Setter largeur (pas de valeurs négatives)
    public function setLargeur($largeur) {
        if ($largeur < 0) {
            echo "Erreur : la largeur doit être positive.\n";
            return;
        }
        $this->largeur = $largeur;
    }

    // Getter hauteur
    public function getHauteur() {
        return $this->hauteur;
    }

    // Setter hauteur (pas de valeurs négatives)
    public function setHauteur($hauteur) {
        if ($hauteur < 0) {
            echo "Erreur : la hauteur doit être positive.\n";
            return;
        }
        $this->hauteur = $hauteur;
    }

    // Méthode pour calculer l'aire
    public function getAire() {
        return $this->largeur * $this->hauteur;
    }
}

// Exemple d'utilisation
$rect = new Rectangle(5, 10);

echo "Largeur : " . $rect->getLargeur() . "\n";   // 5
echo "Hauteur : " . $rect->getHauteur() . "\n";   // 10
echo "Aire : " . $rect->getAire() . "\n";         // 50