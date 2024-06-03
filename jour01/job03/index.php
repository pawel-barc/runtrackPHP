<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $chiffreInt    = 17;
    $chiffreFloat  = 1.67;
    $chaineDeCar   = 'dix-sept';
    $bool          = false;
    $varNull       = null;
    $array         = [1,2,3,4,5];
    $object        = (object) ["prop1" => "val1", "prop2" => "val2"];

    echo " <table border='6'>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Integrer</td>
                <td>chiffreInt</td>
                <td> '. $chiffreInt .'</td>
            </tr>
            <tr>
                <td>Float</td>
                <td>chiffreFloat</td>
                <td> '. $chiffreFloat .'</td>
            </tr>
            <tr>
                <td>String</td>
                <td>chaineDeCar</td>
                <td> '. $chaineDeCar .'</td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>bool</td>
                <td>' . ($bool ? 'true' : 'false') . '</td>
            </tr>
            <tr>
                <td>Null</td>
                <td>varNull</td>
                <td> '. $varNull .'</td>
            </tr>
            
        </tbody>
    </table>";            

    ?>
    
</body>
</html>