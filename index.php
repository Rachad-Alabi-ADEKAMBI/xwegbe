<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'meta.php'; ?>

    <title>Xwegbe - Appartements meublés au Bénin</title>
</head>

<body>
    <?php include 'header2.php'; ?>

    <div class="top">
        <h1>Bienvenue sur <span>XWEGBE !</span></h1>

        <form action="" class="top__research-form">
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
                <select name="number_of_people" id="">
                    <option value="">Sélectionner</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label>

            <label for=""> <br>
                <button type="submit" class="top__research-form__submit" onclick='message()'>
                    Chercher <i></i>
                </button>
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
                    Xwegbe est une entreprise de location d'appartements meublés au Bénin.
                    Depuis 2017 nous mettons à votre disposition pour de courtes ou longues durées
                    des appartements.

                </p>

                <button class="link">
                    <a href="#contact">Contact</a>
                </button>
            </div>
        </div>
    </div>

    <div class="gallery">
        <h2>
            Nos appartements
        </h2>

        <div class="gallery__content">
            <div class="slide">
                <div class="slide__img">
                    <div class="like">
                    <i class="fas fa-heart"></i>
                    </div>

                    <div class="price">
                        à partir de: <br>
                        <span>40. 000 FCFA</span> / nuit
                    </div>

                    <img src="public/images/img12.jpg" alt="">
                </div>

                <h3>
                    Appartement 1
                </h3>

                <p class="details">
                    Détails:
                </p>

                <p>
                    <span>Chambres:</span>2
                </p>

                <p>
                    <span>Equipements: </span>climatisaion, parking, wifi
                </p>
            </div>

            <div class="slide">
                <div class="slide__img">
                    <div class="like">
                        ()
                    </div>

                    <div class="price">
                        à partir de: <br>
                        <span>40. 000 FCFA</span> / nuit
                    </div>

                    <img src="public/images/img12.jpg" alt="">
                </div>

                <h3>
                    Appartement 1
                </h3>

                <p class="details">
                    Détails:
                </p>

                <p>
                    <span>Chambres:</span>2
                </p>

                <p>
                    <span>Equipements: </span>climatisaion, parking, wifi
                </p>
            </div>

            <div class="slide">
                <div class="slide__img">
                    <div class="like">
                        ()
                    </div>

                    <div class="price">
                        à partir de: <br>
                        <span>40. 000 FCFA</span> / nuit
                    </div>

                    <img src="public/images/img12.jpg" alt="">
                </div>

                <h3>
                    Appartement 1
                </h3>

                <p class="details">
                    Détails:
                </p>

                <p>
                    <span>Chambres:</span>2
                </p>

                <p>
                    <span>Equipements: </span>climatisaion, parking, wifi
                </p>
            </div>

            <div class="slide">
                <div class="slide__img">
                    <div class="like">
                        ()
                    </div>

                    <div class="price">
                        à partir de: <br>
                        <span>40. 000 FCFA</span> / nuit
                    </div>

                    <img src="public/images/img12.jpg" alt="">
                </div>

                <h3>
                    Appartement 1
                </h3>

                <p class="details">
                    Détails:
                </p>

                <p>
                    <span>Chambres:</span>2
                </p>

                <p>
                    <span>Equipements: </span>climatisaion, parking, wifi
                </p>
            </div>
        </div>

        <div class="gallery__blue">
            <div class="gallery__blue__btns">
                <div class="btn">
                    << </div>
                        <div class="btn">
                            >>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="testimonies">
        <div class="testimonies__slides">
            <div class="testimonies__slides__testimony">
                <img src="public/images/img2.jpg" alt="appartement meublés au Bénin">
                <div class="text">
                    <span>"</span> <br>

                    <p>
                        Ma famille et moi avons passé un excellent week-end. l'appartement était mieux que ce que nous
                        espérions, je recommande vivement.
                    </p>


                    <p class="client">
                        Iris
                    </p>
                    <p class="happy">
                        Cliente satisfaite
                    </p>


                </div>
            </div>
        </div>

        <div class="testimonies__btns">
            <div class="btn">
                << </div>
                    <div class="btn">
                        >>
                    </div>

            </div>
        </div>
    </div>

    <div class="reasons-section">

        <div class="reasons-section__content">
            <div class="reasons-section__content__details">
                <img src="public/icons/hand.svg" alt="">

                <h3 class="title">
                    Pourquoi nous choisir ?
                </h3>

                <p class="text">
                    Dans nos appartements vous vous sentirez comme chez vous,
                    entre autres equipements vous disposez de:
                    <ul>
                        <li>
                        <i class="fas fa-check"></i> La machine a laver
                        </li>
                        <li>
                        <i class="fas fa-check"></i> La climatisation
                        </li>

                        <li>
                        <i class="fas fa-check"></i> Parking gratuit
                        </li>

                        <li>
                        <i class="fas fa-check"></i> Wifi, eau et electricite
                        </li>
                    </ul>
                </p>

                <button class="link">
                    <a href="liste-appartements.php">Réserver</a>
                </button>
            </div>

            <div class="reasons-section__content__picture">
                <div class="background">
                    <img src="public/images/a3-2.jpg" alt="">
                </div>
            </div>


        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        function message(){
            alert('Page en cours de maintenance, veuillez reessayer ulterieurement');
        }
    </script>


</body>

</html>