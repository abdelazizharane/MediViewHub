<?php
session_start();
require_once './scripts_php/check_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
    <title>Medi View Hub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<style>
    .navbar-nav {
      display: flex;
      align-items: center;
  }

  .nav-item-right {
      margin-left: 20px;
  }

  .nav-link-username {
      color: gray; /* Couleur du texte */
      font-weight: bold; /* Police en gras */
  }
</style>

  <!---_________________________________HEADER_________________________________________________-->
  <nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><img class="w-100" src="img/MediLogo2.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active" href="./index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./apropos.php">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./server.html">Serveur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./visualisation.html">visualiser</a>
          </li>       
        </ul>
        <!-- <ul class="right navbar-nav ms-auto">
            <?php require_once './scripts_php/nav.php'; ?>
            <li class="nav-item-right">
              <a class="nav-link-right btn-fill" href="#">Apprendre plus</a>
            </li>
        </ul> -->
      </div>
    </div>
  </nav>  

    <!---______________________________FIN___HEADER_________________________________________________-->


    <!------------------------Nos différentes activités -------------------------->
      <main>
        <div class="container">
          <div class="row">
            <div class="main col-lg-8">
                <div class="all-posts">
                  <div class="post-item">
                    <div class="post-img"><img src="./img/machine scan.png" alt=""></div>
                    <div class="post-main-info">
                      <h4>Interface conviviale du serveur </h4>
                      <p>Grâce à notre innovation,<br> MediViewHub s'intègre facilement aux systèmes existants, ce qui permet une adoption fluide et une compatibilité avec les flux de travail existants. 
                        <br>Vous pouvez tirer parti de toutes les fonctionnalités de notre plateforme sans perturber vos processus de travail actuels</p>
                    </div>
                  </div>       
                  <div class="post-item">
                    <div class="post-img"><img src="./img/imagerieView.jpg" alt=""></div>
                    <div class="post-main-info">
                      <h4>Visualisation médicale intelligente commence ici</h4>
                      <p>Chez MediViewHub©️, nous croyons que la visualisation des images médicales ne devrait pas être une source de frustration ou de complexité. <br> Nous sommes déterminés à fournir une solution complète et innovante qui simplifie la gestion de l'imagerie médicale et améliore les soins aux patients.
                        <br>
                      </p>
              
                    </div>
                  </div>
                  <div class="post-item">
                    <div class="post-img"><img src="./img/b.jpg" alt=""></div>
                    <div class="post-main-info">
                      <h4>Intégration de l'IA dans un futur proche</h4>
                      <p>Nous souhaitons intégrer l'IA 🤖 pour aider les radiologues dans l'interprétation des images et l'identification de problèmes potentiels, bien que nous devons souligné que l'IA ne devrait être qu'un outil d'aide et non remplacer l'expertise humaine. <br>
                      Et aussi nous aurons la possibilité d'intégrer MediViewHub avec des systèmes PACS (Picture Archiving and Communication System) déjà existants dans les hôpitaux, afin de faciliter le partage et le stockage des images médicales.</p>
                    </div>
                  </div>
                  <div class="post-item">
                    <div class="post-img"><img src="./img/stockage.jpg" alt=""></div>
                    <div class="post-main-info">
                      <h4>Stockage sécurisé</h4>
                      <p>Nous comprenons l'importance de la sécurité et de la confidentialité des données médicales. C'est pourquoi nous avons mis en place des mesures de sécurité robustes pour protéger vos informations sensibles. <br>Vos images médicales sont stockées de manière sécurisée et conformément aux normes de confidentialité en vigueur.</p>
                      <a href="./apropos.php" class="btn-fill">Plus</a>
                    </div>
                  </div>
                </div>
                <!----Boutons pour next-------------->
                <nav aria-label="blog navigation">
                  <ul class="pagination">
                    <li class="page-item ">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Précédent</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Suivant</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!----Fin Boutons pour next-------------->

            </div>
          
            </div>
          </div>
        </div>
      </main>

       <!------------------------FIN de : Nos différentes activités -------------------------->


          
<!--___________________ Footer : Pied de la page ______________-->
<footer>
  <div class="container text-center text-md-start py-5">
    <div class="footer-wrap">
      <div class="about">
        <img src="./img/MediLogo2.png" alt="">
        <p class="text-muted py-4">
          Notre plateforme offre un moyen intuitif et efficace de stocker, accéder, visualiser et partager des images médicales entre les professionnels de santé, facilitant ainsi la collaboration et l'échange d'informations critiques.
        </p>
        <div class="social-media">
          <a href="" class="me-2 text-reset"><img src="./img/icon/instagram_icon.svg" alt="Instagram"></a>
          <a href="https://twitter.com/egoustou" class="me-2 text-reset"><img src="./img/icon/twitter_icon.svg" alt="Twitter"></a>
          <a href="https://www.linkedin.com/in/abdel-aziz-harane" class="me-2 text-reset"><img src="./img/icon/linkedin_icon.svg" alt="linkedin"></a>
        </div>
      </div>
      <div class="company">
        <h6 class="fw-bold">MediViewHub</h6>
        <p><a href="">A propos</a></p>
        <p><a href="">Services</a></p>
        <p><a href="">Équipe</a></p>
      </div>
      <div class="useful-links">
        <h6 class="fw-bold">Liens utiles</h6>
        <p><a href="">Services</a></p>
        <p><a href="">Politique de confidentialité</a></p>
        <p><a href="">Documentation</a></p>
      </div>
      <div class="newsletter">
        <h6 class="fw-bold">Newsletter</h6>
        <p class="text-muted">Inscrivez-vous et recevez les nouvelles par e-mail.</p>
          <form id="subscribe" action="">
            <label for="email">Votre-mail:</label>
            <input type="email" placeholder="e-mail:" name="email" required>
            <button type="submit" class="btn-fill">Inscrivez-vous</button>
          </form>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2023 Medi View Hub | Created by <a href="https://www.linkedin.com/in/abdel-aziz-harane/" title="Abdel-aziz Harane" target="_blank">Abdel-aziz Harane</a></p>
      
    </div>
  </div>
  </footer>
  
  <!--_________________________FIN DE FOOTER________________________________________________--> 
  
  <div class="fb2022-copy">Medi View Hub 2023 copyright</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
  </html>