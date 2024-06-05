<?php
    function calcule(int $numb1, string $char_sp, int $numb2 ){
        switch($char_sp){
            case '+':
                return $numb1 + $numb2;
            case '-':
                return $numb1 - $numb2;
            case '*':
                return $numb1 * $numb2;
            case '/':
                if($numb2!=0){
                return $numb1 / $numb2;
                }else{
                return " Erreur: Division par zéro n'est pas permis ";
                }  
            case '%':
                if($numb1!=0){
                return $numb1 % $numb2;  
                }else{
                return "Erreur: Opération non supportée";
                }

        }
    }
    echo calcule (8, '+', 2);
    echo "<br>";
    echo calcule (16, '-', 6);
    echo "<br>";
    echo calcule (2, '*', 5);
    echo "<br>";
    echo calcule (16, '/', 4);
    echo "<br>";
    echo calcule (1, '%', 4);
    ?>