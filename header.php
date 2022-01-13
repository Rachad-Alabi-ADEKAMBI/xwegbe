<?php include 'functions.php'; ?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">
          <a href="index.php">
          <img src="public/images/logo.png" alt="">
          </a>
      </label>
      <ul>
      <li><a class=" <?php echo $current_page == 'index.php' ? 'active':NULL ?>" href="index.php">Accueil</a></li>
    <li><a class=" <?php echo $current_page == 'appartements.php' ? 'active':NULL ?>" href="appartements.php">Appartements</a></li>
    <li><a class=" <?php echo $current_page == 'galerie.php' ? 'active':NULL ?>" href="galerie.php">Galerie</a></li>
    <li><a class=" <?php echo $current_page == 'contact.php' ? 'active':NULL ?>" href="contact.php">Contact</a></li>
   
        <?php
        if(!isset($_SESSION["user"])): ?>
          <li><a class="login-link <?php echo $current_page == 'connexion.php' ? 'active':NULL ?>" href="connexion.php">Connexion</a></li>

        <?php else: ?>

          <li><a class="<?php echo $current_page == 'tableau-de-bord.php' ? 'active':NULL ?>" href="tableau-de-bord.php">Tableau de bord</a></li>

          
        <li><a href="deconnexion.php" class="">Deconnexion</a></li>

        <?php endif;  ?>
       
      </ul>
    </nav>
    <section></section>
  </body>
</html>