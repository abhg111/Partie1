<h1>Exercise 6</h1>
<?php

// Calculer le montant HT
$nbArt = 5;
$prixuht = 9.99;
$totalHT = $nbArt * $prixuht; 

echo "Prix unitaire de l’article : $prixuht  € <br>";
echo "Quantité : $nbArt <br>"; 

// Calculer le montant total (TTC)
$tauxTVA = 0.2;
$totalTTC = $totalHT * (1 + $tauxTVA);
 
echo "Taux de TVA : $tauxTVA <br>";
echo "Le montant de la facture à régler est de  : $totalTTC  € <br>";