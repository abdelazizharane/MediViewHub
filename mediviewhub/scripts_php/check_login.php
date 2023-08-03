<?php

// Vérifier si l'utilisateur est connecté en vérifiant si la variable de session "username" est définie
if (!isset($_SESSION['username'])) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: login.html");
    exit();
}
?>
