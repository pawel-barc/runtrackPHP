<?php
if (count($_POST) > 0) {
    // Afficher le nombre d'arguments $_POST
    $nombre_arguments = count($_POST);
    echo "Nombre d'arguments $_POST reçus : $nombre_arguments";
} else {
    // Aucun argument $_POST reçu
    echo "Aucun argument $_POST reçu.";
}
?>
