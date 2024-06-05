<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Maison</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .house {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>
    <h1>Formulaire Maison</h1>
    <form method="post" action="">
        <label for="width">Largeur :</label>
        <input type="number" id="width" name="width" required><br><br>
        <label for="height">Hauteur :</label>
        <input type="number" id="height" name="height" required><br><br>
        <button type="submit">Afficher la maison</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $width = intval($_POST['width']);
        $height = intval($_POST['height']);

        if ($width > 0 && $height > 0) {
            echo '<div class="house">';
            // Toit
            $roofWidth = $width + 2;
            for ($i = 0; $i < $height; $i++) {
                echo str_repeat(' ', intval(($roofWidth - (2 * $i + 1)) / 2)) . '/' . str_repeat(' ', 2 * $i) . '\\<br>';
            }


            // Partie supérieure
            echo '/' . str_repeat('_', $width) . '\\<br>';

            // Murs
            for ($i = 0; $i < $height - 1; $i++) {
                echo '|' . str_repeat(' ', $width) . '|<br>';
            }

            // Base
            echo '|' . str_repeat('_', $width) . '|';
            echo '</div>';
        } else {
            echo '<p>Veuillez entrer des valeurs positives pour la largeur et la hauteur.</p>';
        }
    }
    ?>
</body>
</html>
