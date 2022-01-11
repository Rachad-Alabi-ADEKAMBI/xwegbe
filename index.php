<?php session_start(); 

//traitement de la recherche
include 'db.php';
include 'functions.php';
if (!empty ($_POST)){

    $errors = array ();

    if (empty ($_POST['arrival_date'])) {
        $errors['arrival_date'] = "Date de d'arrivée non valide";
    } 

   if (empty ($_POST['departure_date'])) {
       $errors['departure_date'] = "Date de départ non valide";
   }

   if (empty ($_POST['rooms']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['rooms'])) {
       $errors['rooms'] = "Nombre de voyageurs non valide";
   } 
  
   if(empty($errors)){
        $rooms = $_POST['rooms'];
        $arrival_date =  $_POST['arrival_date'];
        $departure_date =  $_POST['departure_date'];

    
       $_SESSION['book'] = [
           "rooms" =>$rooms,
           "arrival_date" =>$arrival_date,
           "departure_date" =>$departure_date
       ];

      
       header("Location: resultats-de-la-recherche.php");

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Xwegbe - Accueil</title>
</head>
<body>
  
        <?php include 'header.php'; ?>

        <div class="categories__list__post__item">
            <div class="row">
                    <div class="post">
                        <div class="categories__post__item__pic">
                            <div class="post__meta">
                                <h4>
                                    08
                                </h4>

                                <span>
                                    Aout
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                        <ul>
                            <li>
                                OKLm
                            </li>

                            <li>
                                Random text
                            </li>
                        </ul>

                        <h3>
                            Titre du post
                        </h3>

                        <ul class="post__Widget">
                            <li>
                                By Admin
                            </li>

                            <li>
                                3 min read
                            </li>

                            <li>
                                20 comments
                            </li>
                        </ul>

                        <p>
                            Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Cum dolorem rerum 
                             soluta voluptatibus quasi minus dolore 
                             necessitatibus ipsa voluptatum mollitia 
                             dolores perferendis incidunt, magnam quod
                              eveniet repellendus, facere quis illo?
                        </p>
                    </div>
            </div>
        </div>

        <div class="container" id="bookings" >

                <div class="top">
                    <h1 class="site_title" >Bienvenue sur <span>XWEGBE !</span></h1>

                    <form action="" method="POST"  id="bookings" class="top__research-form" 
                            id="reservations">
                
                            <label class="top__research-form__label">
                                Date d'arrivée: <br>
                                <input type="date" placeholder="Arrivée*" name="arrival_date">
                            </label>

                            <label class="top__research-form__label">
                            <img src="public/icons/people.svg" alt="">
                        <br>
                                <input type="date" placeholder="Départ*" name="departure_date">
                            
                            </label>

                            <label class="top__research-form__label">
                                Nombre de personnes: <br>
                                <select  name="rooms" id="">
                                        <option value="">Sélectionner</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                </select>
                            </label>

                            <label class="top__research-form__label"> <br>
                                <button type="submit" class="top__research-form__submit">
                                    Vérifier la disponibilité <i></i>
                                </button> 
                                
                                <i class="fas fa-search look-icon"></i>
                                
                            </label>
                    </form>

                    <?php  if (!empty($errors)):?>

                    <div class="alert" width=400>
                            <ul>
                                <?php foreach ($errors as $error): ?>   
                                <li><?= $error; ?></li>
                                <?php endforeach;?>
                            </ul>
                    </div>
                <?php endif; ?>

            </div>

            <div class="about-section">
                <h2 class="about-section__title">
                    Xwegbe, 1er catalogue d'appartements meublés au Bénin
                </h2>

                <div class="about-section__content">
                    <div class="about-section__content__picture">
                        <div class="background">
                            <img src="public/images/xwegbe.jpeg" alt="">
                        </div>
                    </div>
        
                    <div class="about-section__content__details">
                                <img src="public/icons/people.svg" alt="">
        
                                <h3 class="title">
                                    Qui sommes nous ?
                                </h3>
        
                                <p class="text">
                                Nous sommes une entreprise de locations 
                                d’appartements meubles a cotonou et environs. 
                                Nous avons des appartments disponibles pour 
                                tout type de sejours et pour tous les budgets. 
                                Merci de nous faire confiance depuis bientot 3 ans. 
                                </p>

                                <button class="link">
                                    <a href="a-propos.php">En savoir plus</a>
                                </button>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'slider.php'; ?>
  
    <?php include 'slider2.php'; ?>

        <div class="categories__list__post__item">
            <div class="row">
                    <div class="post">
                        <div class="categories__post__item__pic">
                            <div class="post__meta">
                                <img src="" alt="">
                                <h4>
                                    08
                                </h4>

                                <span>
                                    Aout
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                        <ul>
                            <li>
                                OKLm
                            </li>

                            <li>
                                Random text
                            </li>
                        </ul>

                        <h3>
                            Titre du post
                        </h3>

                        <ul class="post__Widget">
                            <li>
                                By Admin
                            </li>

                            <li>
                                3 min read
                            </li>

                            <li>
                                20 comments
                            </li>
                        </ul>

                        <p>
                            Lorem ipsum dolor sit amet consectetur
                             adipisicing elit. Cum dolorem rerum 
                             soluta voluptatibus quasi minus dolore 
                             necessitatibus ipsa voluptatum mollitia 
                             dolores perferendis incidunt, magnam quod
                              eveniet repellendus, facere quis illo?
                        </p>
                    </div>
            </div>
        </div>
        

    <div class="reasons-section">
        <div class="reasons-section__content">
            <div class="reasons-section__content__details">
                <img src="public/icons/hand.svg" alt="">

                <h3 class="title">
                    Pourquoi nous choisir
                </h3>

                <p class="text">
                    Dans nos appartements, vous vous sentirez comme chez vous, entre autres équipements
                    vous disposez de: 
                    <ul>
                        <li>
                        <i class="fas fa-check"></i> La machine à laver
                        </li>

                        <li>
                        <i class="fas fa-check"></i> La Climatisation
                        </li>

                        <li>
                        <i class="fas fa-check"></i> Le parking gratuit
                        </li>
                        
                        <li>
                        <i class="fas fa-check"></i> Wifi, eau et electricité inclus
                        </li>
                    </ul>
                </p>

                <button class="link">
                    <a href="#bookings">Faire une réservation</a>
                </button>
            </div>

            <div class="reasons-section__content__picture">
                <div class="background">
                    <img src="public/images/xwegbe2.jpg" alt="appartements meublés à cotonou">
                </div>
            </div>

        
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="public/js/script.js" ></script>
</body>
</html>
