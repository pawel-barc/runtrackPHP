<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i<=100; $i++ ){
    if($i == 42){
        echo "La Plateforme_<br>";
    }elseif($i<20){
            echo "<em>$i</em><br>";
        }elseif($i>24 && $i<=50){
            echo "<u>$i</u><br>";
        
        }else{
            echo " $i<br> ";
        }
    }
    ?>

</body>
</html>