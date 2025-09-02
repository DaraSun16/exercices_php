<?php

require_once __DIR__.'/Forme.php';

class Rectangle {
    // Les propriétés sont définies directement dans le constructeur
    public function __construct(
        private float $largeur,
        private float $hauteur
    ) {
        if ($largeur < 0 || $hauteur < 0) {
            throw new InvalidArgumentException("La largeur et la hauteur doivent être positives.");
        }
    }

    // Getters
    public function getLargeur(): float {
        return $this->largeur;
    }

    public function getHauteur(): float {
        return $this->hauteur;
    }

    // Setters avec vérification
    public function setLargeur(float $largeur): void {
        if ($largeur < 0) {
            throw new InvalidArgumentException("La largeur doit être positive.");
        }
        $this->largeur = $largeur;
    }

    public function setHauteur(float $hauteur): void {
        if ($hauteur < 0) {
            throw new InvalidArgumentException("La hauteur doit être positive.");
        }
        $this->hauteur = $hauteur;
    }

    // Calcul de l'aire
    public function getAire(): float {
        return $this->largeur * $this->hauteur;
    }

    // (Optionnel) Calcul du périmètre
    public function getPerimetre(): float {
        return 2 * ($this->largeur + $this->hauteur);
    }
}

// Exemple d'utilisation
try {
    $rect = new Rectangle(5, 10);
    echo "Largeur : " . $rect->getLargeur() . "\n";   // 5
    echo "Hauteur : " . $rect->getHauteur() . "\n";   // 10
    echo "Aire : " . $rect->getAire() . "\n";         // 50
    echo "Périmètre : " . $rect->getPerimetre() . "\n"; // 30
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage();
}