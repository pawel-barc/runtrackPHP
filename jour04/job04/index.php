<?php
session_start();


if (isset($_POST['deco'])) {

    setcookie('prenom', '', time() - 3600);
 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['connexion'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    if (!empty($prenom)) {

        setcookie('prenom', $prenom, time() + (30 * 24 * 60 * 60));
    
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}


if (isset($_COOKIE['prenom'])) {
    $prenom = htmlspecialchars($_COOKIE['prenom']);

    echo "<h1>Bonjour $prenom !</h1>";
    echo '<form method="POST" action="">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {

    echo '<form method="POST" action="">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>
