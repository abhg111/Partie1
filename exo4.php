<h1>Exercise 4</h1>
<?php

$pali = "Engage le jeu que je le gagne";

function palindrome($pali) {
 
 
    $cleanedString = strtolower(str_replace(" ",'', $pali));
 
 
 
    $reversedString1 = strrev($cleanedString);
 
    if( $cleanedString === $reversedString1){
 
        return "est palindrome";
    }else{
 
        return "pas un palindrome";
    }
 
 
 
}
 
echo  "La phrase". " " . "« ". $pali." »". " " .palindrome($pali);