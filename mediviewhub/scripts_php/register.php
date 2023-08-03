<?php
require_once "conn.php";

// Vérifie si le formulaire a été soumis
if (isset($_POST['username'])) {

  // Rassemble les données du formulaire
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  // Vérifie si les champs sont vides
  if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
    echo "Tous les champs sont obligatoires.";
  } else {

    // Vérifie si les mots de passe correspondent
    if ($password !== $password_confirm) {
      echo "Les mots de passe ne correspondent pas.";
    } else {

      // Vérifie si l'adresse e-mail est déjà utilisée
      $sql = "SELECT * FROM users WHERE email = :email";
      $stmt = $conn->prepare($sql);
      $stmt->execute(['email' => $email]);

      if ($stmt->rowCount() > 0) {
        echo "Cette adresse e-mail est déjà utilisée. Veuillez utiliser une autre adrese e-mail !";
      } else {

        // Vérifie si le nom d'utilisateur est déjà utilisé
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['username' => $username]);

        if ($stmt->rowCount() > 0) {
          echo "Ce nom d'utilisateur est déjà utilisé.";
        } else {

          // Crée un nouvel utilisateur
          $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hachage du mot de passe
          $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
          $stmt = $conn->prepare($sql);
          $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

          // Envoie un e-mail de confirmation à l'utilisateur (vous pouvez ajouter cela plus tard)

          // Redirige l'utilisateur vers la page de connexion
          header("Location: ../login.html");
          exit();
        }
      }
    }
  }
}
?>