<?php
if(isset($_POST['reset'])){
    setcookie("nbVisites", 0, time() -3600);
    $nbVisites =0;
}else{
    if(isset($_COOKIE["nbVisites"])){
        $nbVisites = $_COOKIE["nbVisites"] + 1;
    }else{
        $nbVisites = 0;
    }
    setcookie("nbVisites", $nbVisites, time() + 3600 );
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombres de visites : <?php echo $nbVisites; ?></p>
    <form method = "post">
        <button type = "submit" name = "reset">Reset</button>
    </form>    
</body>
</html>