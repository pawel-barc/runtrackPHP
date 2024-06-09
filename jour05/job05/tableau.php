<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Données de Sexe féminin</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Inclure le fichier de connexion à la base de données
        include 'db_connection.php';

        try {
            // Préparation de la requête SQL
            $stmt = $pdo->prepare("SELECT prenom, nom, naissance FROM etudiant WHERE sexe = 'Femme'");
            $stmt->execute();

            // Récupération des résultats de la requête
            $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Boucle à travers les résultats et affichage dans le tableau HTML
            foreach ($etudiants as $etudiant) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($etudiant['prenom']) . "</td>";
                echo "<td>" . htmlspecialchars($etudiant['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($etudiant['naissance']) . "</td>";
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
