<?php

if (isset($_SESSION['username'])) {
    // L'utilisateur est connecté, affichez son nom dans la barre de navigation
    $username = $_SESSION['username'];
    echo '


        <li class="nav-item-right">
            <span class="nav-link-username">Bienvenue, ' . $username .  ' </span>
        </li>
        
        <li class="nav-item-right">
              <a class="nav-link-right" href="scripts_php/logout.php">Se déconnecter</a>
        </li>
          ';
} else {
    // L'utilisateur n'est pas connecté, affichez le bouton de connexion dans la barre de navigation
    echo '<li class="nav-item-right">
              <a class="nav-link-right" href="login.html">Connexion</a>
          </li>';
}
?>
