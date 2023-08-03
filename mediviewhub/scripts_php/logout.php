<?php
// Début de session
session_start();

// Détruit toutes les variables de session
session_unset();

// Détruit la session
session_destroy();

// Redirige l'utilisateur vers la page d'accueil
header("Location: ../index.php");
exit();
?>
