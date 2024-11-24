<h1>Exercise 13</h1>
<?php

// tableau de notes 
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;

}


echo "Les notes obtenues par l’élève sont : ".implode(" ", $notes). "<br>";
echo "Sa moyenne générale est donc de : " . calculerMoyenne($notes);