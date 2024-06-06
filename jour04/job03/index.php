<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['submit'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }

    if (!empty($prenom)) {
        $_SESSION['prenoms'][] = $prenom;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        } else {
            echo "<li>Aucun prénom ajouté.</li>";
        }
        ?>
    </ul>
</body>
</html>
