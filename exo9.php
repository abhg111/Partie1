<h1>Exercise 9</h1>

<?php

$age = 32;
$sex = "F";

/*
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans celle-ci est imposable ou
 Si c’est un homme de plus de 20 ans 
 (sinon ce n’est pas le cas, « non imposable »)
 */

 if (($sex == 'F' && $age >= 18 && $age <= 35) || ($sex == 'H' && $age > 20)) {
    $resultat = "Imposable.";
} else {
    $resultat = "Non imposable.";
}


echo "Age : ". $age. "<br>". "Sexe : ". $sex. "<br>". "La personne est ". $resultat ;