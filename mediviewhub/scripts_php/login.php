<?php
require_once "conn.php";

// Vérifie si le formulaire a été soumis
if (isset($_POST['email'])) {

  // Rassemble les données du formulaire
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Vérifie si les champs sont vides
  if (empty($email) || empty($password)) {
    echo "Tous les champs sont obligatoires.";
  } else {

    // Vérifie si l'utilisateur existe
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);

    $num_rows = $stmt->rowCount();

    if ($num_rows === 0) {
      echo "Les informations de connexion sont incorrectes.";
    } else {

      // Récupère les informations de l'utilisateur
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $hashed_password = $row['password']; // Mot de passe haché enregistré dans la base de données

      // Vérifie le mot de passe saisi avec le mot de passe haché enregistré dans la base de données
      if (password_verify($password, $hashed_password)) {
        // Mot de passe correct
        $username = $row['username'];
        $userid = $row['id'];

        // Crée une session
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $userid;

        // Redirige l'utilisateur vers la page d'accueil
        header("Location: ../index.php");
      } else {
        // Mot de passe incorrect
        echo "Les informations de connexion sont incorrectes.";
      }
    }
  }
}
?>
