<h1>Exercise 12</h1>
<?php

$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];
// Tableau des salutations en fonction des codes de langue
$salutations = [
    "FRA" => "Salut",
    "ENG" => "Hello",
    "ESP" => "Hola",
];

foreach($personnes as $prenom => $langue) 

if (array_key_exists($langue, $salutations)) {
    echo $salutations[$langue] . " " . $prenom."<br>" ;
} 
echo "<br>";
// Tri du tableau des prénoms par ordre alphabétique

ksort($personnes);

foreach($personnes as $prenom => $langue) 

if (array_key_exists($langue, $salutations)) {
    echo $salutations[$langue] . " " . $prenom."<br>" ;
} 