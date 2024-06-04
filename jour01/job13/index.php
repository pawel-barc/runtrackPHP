<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function occurences($str, $char){
        $compteur = 0;
        for($i =0; $i<strlen(str); $i++){
            if($str[$i] === $char){
                $compteur++;
            }
        }
        return $compteur;    
    }
    $str = "Atakamana";
    $char = "o";
    echo "Le nombre d'occurrences de '$char' dans '$str' est: " . occurrences($str, $char);
    ?>

</body>
</html>