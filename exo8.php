<h1>Exercise 8</h1>

<?php
// En utilisant boucle "FOR"
$nombre = 8 ;

echo "Table de " . $nombre ." :". "<br>";

for ($i = 1; $i <= 10; $i++) {
        echo $i . " x " . $nombre . " = " . ($i * $nombre) . "<br>";
        }
echo "<br>";

// En utilsant boucle ""WHILE"
 
echo "Table de " . $nombre . " :"."<br>";

    $i = 1;  
    while ($i <= 10) {
    
        echo $i . " x " . $nombre . " = " . ($i * $nombre) . "<br>";
        $i++; 
        }