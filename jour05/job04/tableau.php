<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid black;
        }
        th, td{
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <h1>Liste des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Inclure le fichier de connexion à la base de données
        include 'db_connection.php';

        try {
            // Préparation de la requête SQL avec une virgule correcte
            $stmt = $pdo->prepare("SELECT nom, capacite FROM salle");
            $stmt->execute();

            // Récupération des résultats de la requête
            $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Boucle à travers les résultats et affichage dans le tableau HTML
            foreach ($salles as $salle) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($salle['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($salle['capacite']) . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs de la requête SQL
            die("Erreur de requête : " . $e->getMessage());
        }
        ?>
        </tbody>
    </table>
</body>
</html>
