<?php

require_once __DIR__.'/classes/Voiture.php';
require_once __DIR__.'/classes/Chien.php';
require_once __DIR__.'/classes/Rectangle.php';
require_once __DIR__.'/classes/Cercle.php';
require_once __DIR__.'/classes/Personne.php';
require_once __DIR__.'/classes/Etudiant.php';
require_once __DIR__.'/classes/Employe.php';
require_once __DIR__.'/classes/Animal.php';
require_once __DIR__.'/classes/AnimalInterface.php';
require_once __DIR__.'/classes/Chat.php';
require_once __DIR__.'/classes/CompteBancaire.php';
require_once __DIR__.'/classes/CompteEpargne.php';
require_once __DIR__.'/classes/Forme.php';
require_once __DIR__.'/classes/Avion.php';
require_once __DIR__.'/classes/Zoo.php';
require_once __DIR__.'/classes/Velo.php';
require_once __DIR__.'/classes/MathUtils.php';
require_once __DIR__.'/classes/Database.php';
require_once __DIR__.'/classes/SoldeInsuffisantException.php';
require_once __DIR__.'/classes/ProduitInexistantException.php';
require_once __DIR__.'/classes/Panier.php';
require_once __DIR__.'/classes/EmailInvalideException.php';
require_once __DIR__.'/classes/Utilisateur.php';
require_once __DIR__.'/classes/Fichier.php';
// Personne/Etudiant/Employe
$p = new Personne('Alice', 30); $e = new Etudiant('Bob', 20, 'L3'); $emp = new Employe('Eve', 40, 3500);
echo $p->sePresenter()."\n";
echo $e->sePresenter()."\n";
echo 'Employe: '.$emp->sePresenter()."\n";

echo 'Compteur Personne = '.Personne::$compteurInstances."\n";

// Animaux + Zoo
$z = new Zoo(); $z->ajouter(new Chat('Mina')); $z->faireParler();

// Banque
$cb = new CompteEpargne('Alice', 0.05); $cb->depot(100);
echo 'Intérêt: '.$cb->calculerInteret()."\n";
try { $cb->retrait(200); } catch (Throwable $ex) { echo 'Exception: '.$ex->getMessage()."\n"; }

// Formes (polymorphe)
$formes = [new Rectangle(2,5), new Cercle(3)];
foreach ($formes as $f) { if ($f instanceof Forme) { echo 'Aire: '.$f->aire()."\n"; } }

// Velo
$velo = new Velo('VTT'); echo $velo->rouler()."\n";

// MathUtils/PI
echo 'Factorielle 5 = '.MathUtils::factorielle(5)."\n";
echo 'PI = '.Cercle::PI."\n";

// Database singleton
$db1 = Database::getInstance(); $db2 = Database::getInstance(); echo 'DB singleton: '.(($db1 === $db2) ? 'OK' : 'KO')."\n";

// Validation/Exceptions diverses
try { new Utilisateur('bad-email'); } catch (Throwable $t) { echo 'Email invalide: OK'."\n"; }
$panier = new Panier(); $panier->ajouter('pomme', 1.2); try { $panier->getPrix('banane'); } catch (Throwable $t) { echo 'Produit inexistant: OK'."\n"; }
$f = new Fichier(__DIR__.'/tmp_demo.txt'); $f->ecrire("Hello\n"); echo 'Fichier: '.trim($f->lireTout())."\n"; 
