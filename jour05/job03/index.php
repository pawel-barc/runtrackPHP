<?php
include 'db_connection.php';

try {
    $stmt = $pdo->prepare("SELECT * FROM etudiant");
    $stmt->execute();

    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de requête :" . $e->getMessage());
}

include 'tableau.php';
?>
