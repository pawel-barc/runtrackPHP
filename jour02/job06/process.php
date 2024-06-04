<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $number = $_GET['number'];
    if($number === 0){
        echo " type un chiffre supérieur à 0 ";
    }elseif ($number%2 == 0){
        echo " Nombre pair ";
    }else{
        echo "Nombre impair";
    }
}
?>