<?php

require_once 'Voiture.php';
require_once 'TypeCarburant.php';

$voiture = new Voiture();
$voiture->setContenanceReservoir(50);
$voiture->setContenuReservoir(30);
$voiture->setVitesseMax(180);
$voiture->setTypeCarburant(typeCarburant::SP95);

echo "nombre de roues = ".$voiture->getNombreDeRoues()."<br>";
echo "vitesse = ".$voiture->getVitesse()."<br>";
echo "vitesse max = ".$voiture->getVitesseMax()."<br>";
echo "type carburant = ".$voiture->getTypeCarburant()->value."<br>";
echo "contenance reservoir = ".$voiture->getContenanceReservoir()."<br>";
echo "contenu reservoir = ".$voiture->getContenuReservoir()."<br>";


echo "<br>";

$voiture->accelerer(50);
echo "vitesse = ".$voiture->getVitesse()."<br>";

echo "<br>";

$pompe = new Pompe(TypeCarburant::SP95, 500);
echo "Contenu cuve = ".$pompe->getContenuCuve()."<br>";
$voiture->fairePlein($pompe);

echo "<br>";

echo "Contenu reservoir = ".$voiture->getContenuReservoir()."<br>";
echo "Contenu cuve = ".$pompe->getContenuCuve()."<br>";