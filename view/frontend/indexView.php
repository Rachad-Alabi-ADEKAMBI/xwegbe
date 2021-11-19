<?php $title = 'Xwegbe - Appartements meublés au Bénin'; ?>

<?php ob_start(); ?> 

        <div class="top">
            <h1>Bienvenue sur <span>XWEGBE !</span></h1>

            <form action="recherche.php" method="POST" class="top__research-form" 
            id="reservations">
            <?php include 'view/errorsView.php';  ?>

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
                            <img src="public/images/icons/people.svg" alt="">
    
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

        <?php include 'sliderView.php'; ?>

        <div class="reasons-section">

            <div class="reasons-section__content">
                <div class="reasons-section__content__details">
                    <img src="public/images/icons/hand.svg" alt="">

                    <h3 class="title">
                        Pourquoi nous choisir ? 
                    </h3>

                    <p class="text">
                        Comme en témoignent nos clients précédents, nous avons à 
                        coeur votre confort et votre sécurité. Dans nos appartements
                        équipés tout a été pris en compte  pour que votre séjour
                        se déroule dans les meilleures conditions possibles.
                    </p>

                    <button class="link">
                        <a href="#reservations">Faire une réservation</a>
                    </button>
                </div>

                <div class="reasons-section__content__picture">
                    <div class="background">
                        <img src="public/images/xwegbe2.jpg" alt="appartements meublés à cotonou">
                    </div>
                </div>
    
              
            </div>
        </div>    

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>