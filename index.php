<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Xwegbe - Accueil</title>
</head>
<body>
    
   <div class="container">
   <?php include 'header.php'; ?>

        <div class="top">
            <h1>Bienvenue sur <span>XWEGBE !</span></h1>

            <form action="" method="POST" class="top__research-form">
                <?php
                 include 'control.php';
                 if (!empty ($_POST)){
     
                     $errors = array ();
                     require_once 'db.php';
                 
                     if (empty ($_POST['arrival_date'])) {
                         $errors['arrival_date'] = "Date de d'arrivée non valide";
                     } 

                    if (empty ($_POST['departure_date'])) {
                        $errors['departure_date'] = "Date de départ non valide";
                    }

                    if (empty ($_POST['number_of_people']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['number_of_people'])) {
                        $errors['number_of_people'] = "Nombre de voyageurs non valide";
                    } 
                   
                    if(empty($errors)){

                    /*
                        $_SESSION['user'] = [
                            "number_of_people" =>$people,
                            "arrival_date" =>$arr,
                            "departure_date" =>$dep
                        ];
                        */

                    //    $date =  ['user']['arrival_date'];

                 /*       echo $date;

                        echo ['user']['number_of_people'];
                        echo['user']['arrival_date'];
                        echo['user']['departure_date'];*/
                        

                        $number_of_people = $_POST['number_of_people'];
                        $arrival_date =  $_POST['arrival_date'];
                        $departure_date =  $_POST['departure_date'];

                        header("Location: resultats-de-la-recherche.php?number_of_people=$number_of_people");
                
                }
            }
                if (!empty($errors)):?>

                <div class="alert" width=400>
                        <ul>
                            <?php foreach ($errors as $error): ?>   
                            <li><?= $error; ?></li>
                            <?php endforeach;?>
                        </ul>
                </div>
                <?php endif; ?>

                    <label class="top__research-form__label">
                        Date d'arrivée: <br>
                        <input type="date" placeholder="Arrivée*" name="arrival_date">
                    </label>

                    <label class="top__research-form__label">
                        Date de départ: <br>
                        <input type="date" placeholder="Départ*" name="departure_date">
                    </label>

                    <label class="top__research-form__label">
                        Nombre de personnes: <br>
                        <select  name="number_of_people" id="">
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
                                Lorem ipsum dolor sit amet consectetur, 
                                adipisicing elit. Culpa consequatur rerum 
                                debitis voluptatem optio vel eligendi maiores 
                                mollitia sed ut accusantium sint quod aperiam 
                                aut unde, doloribus aspernatur repellat quis!
                            </p>

                            <button class="link">
                                <a href="a-propos.php">En savoir plus</a>
                            </button>
                </div>
            </div>
        </div>

        <div class="reasons-section">
            <h2 class="reasons-section__title">
                Xwegbe, 1er catalogue d'appartements meublés au Bénin
            </h2>

            <div class="reasons-section__content">
                <div class="reasons-section__content__details">
                    <img src="public/icons/hand.svg" alt="">

                    <h3 class="title">
                        Pourquoi nous choisir ? 
                    </h3>

                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur, 
                        adipisicing elit. Culpa consequatur rerum 
                        debitis voluptatem optio vel eligendi maiores 
                        mollitia sed ut accusantium sint quod aperiam 
                        aut unde, doloribus aspernatur repellat quis!
                    </p>

                    <button class="link">
                        <a href="appartements.php">En savoir plus</a>
                    </button>
                </div>

                <div class="reasons-section__content__picture">
                    <div class="background">
                        <img src="public/images/xwegbe.jpeg" alt="">
                    </div>
                </div>
    
              
            </div>
        </div>
   </div>

    <?php include 'footer.php'; ?>
    <script src="public/js/script.js" ></script>
</body>
</html>