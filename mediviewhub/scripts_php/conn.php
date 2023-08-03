<?php

// Définissez les paramètres de connexion
$host = 'localhost';
$dbname = 'mediview';
$username = 'root';
$password = '';

// Essayez de se connecter à la base de données
try {
    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
    exit();
}


?>
