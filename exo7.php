<h1>Exercise 7</h1>
<?php

$prenom = "l'enfant";
$age = 10; 
/* 
Si l'enfant entre 6 et 7 ans --> Poussin
Si l'enfant entre 8 et 9 ans --> Pupille
Si l'enfant entre 10 et 11 ans --> Minime
Si l'enfant a 12 ans et plus --> Cadet
sinon il n'est pas dans la catégorie 
*/

if($age < 6){
    $resultat = "aucune catégorie";
} elseif($age >= 6 && $age <= 7) {
    $resultat = "Poussin";
} elseif($age >= 8 && $age <= 9) {
    $resultat = "Pupille";
} elseif($age >= 10 && $age <= 11) {
    $resultat = "Minime";
} elseif($age >= 12) {
    $resultat = "Cadet";
}

echo "L’enfant qui a $age ans appartient à la catégorie « $resultat »";
