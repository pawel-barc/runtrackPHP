<?php
if (count($_POST) > 0) {
    // Créer le tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir les arguments $_POST et afficher les lignes du tableau
    foreach ($_POST as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    // Fermer le tableau HTML
    echo "</table>";
} else {
    // Aucun argument $_POST reçu
    echo "Aucun argument $_POST reçu.";
}
?>
