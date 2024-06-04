<?php
if (count($_GET)>0){
    echo "<table border= '1'>";
    echo " <tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_GET as $key => $value){
        echo " <tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
}else{
    echo " Aucun argument $_GET reçu.";
}
?>