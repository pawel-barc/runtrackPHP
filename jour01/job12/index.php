<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcule($chiffre, $caractSp, $nombre){
        switch ($caractSp){
            case '+':
            return $chiffre + $nombre;
            case '-':
                return $chiffre - $nombre;  
            case '*':
                return $chiffre * $nombre; 
            case '/':
                if($nombre!=0){
                return $chiffre / $nombre; 
                }else{
                    echo " Erreur: Division par zéro ";
                }      
            case '%':
                if($nombre!=0){
                return $chiffre % $nombre; 
                }else{
                    echo " Erreur: Division par zéro ";
                } 
            default:
                return "Erreur: Opération non supportée";                 
        }

    }

    echo calcule (8, '+', 2);
    echo "<br>";
    echo calcule (27, '-', 17);
    echo "<br>";
    echo calcule (2, '*', 5);
    echo "<br>";
    echo calcule (70, '/', 7);
    echo "<br>";
    echo calcule (7, '%', 17);
    ?>
</body>
</html>