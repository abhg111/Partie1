<h1>Exercise 11</h1>
<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$i = count($marques);

echo "Il y a $i marques de voitures dans le tableau :"."<br>"; 

for($i = 0; $i < count($marques); $i++) {
    echo $marques[$i]. "<br>";
}
