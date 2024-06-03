<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getHello(){
        return "Hello La Plateforme!";
    }
    $message = getHello();
    echo $message;
    ?>
</body>
</html>