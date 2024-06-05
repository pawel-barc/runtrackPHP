<?php
function occurrences($str, $char) : string{
    $compteur = 0;
    for ($i=0; $i<strlen($str); $i++){
        if($str[$i] === $char ){
            $compteur++;
        }
    }
    return $compteur;
}
$str = " anaconda ";
$char = "a";
$char = "n";

echo "Le nombre des characteurs demandés est :" .occurrences($str, $char);
?>