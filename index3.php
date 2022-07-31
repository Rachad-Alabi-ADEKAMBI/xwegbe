

    
  
     <?php get_header(); ?> 
     
     
     
   
        

     <div class="container">

         <div class="top">
             <h1 class="site_title" >Bienvenue sur <span>XWEGBE !</span></h1>
 
             <form action="" method="POST"  id="bookings" class="top__research-form" >
           
                     <label class="top__research-form__label">
                         Date d'arrivée: <br>
                         <input type="date" placeholder="Arrivée*" name="arrival_date">
                     </label>
 
                     <label class="top__research-form__label">
                     <img src="<?php echo get_template_directory_uri();  ?>/public/icons/people.svg" alt="">
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
 
          
 
         </div>
 
         <div class="about-section">
             <h2 class="about-section__title">
                 Xwegbe, 1er catalogue d'appartements meublés au Bénin
             </h2>
 
             <div class="about-section__content">
                 <div class="about-section__content__picture">
                     <div class="background">
                         <img src="<?php echo get_template_directory_uri();  ?>/public/images/xwegbe.jpeg" alt="">
                     </div>
                 </div>
     
                 <div class="about-section__content__details">
                             <img src="<?php echo get_template_directory_uri();  ?>/public/icons/people.svg" alt="">
     
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
                                 <a href="<?php echo get_template_directory_uri();  ?>/a-propos.php">En savoir plus</a>
                             </button>
                 </div>
             </div>
         </div>
     
     </div>
     
     
  
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
   
   <?php include 'slider.php'; ?>
     <?php include 'slider2.php'; ?>
   
 <div class="reasons-section">
     <div class="reasons-section__content">
         <div class="reasons-section__content__details">
             <img src="<?php echo get_template_directory_uri();  ?>/public/icons/hand.svg" alt="">

             <h3 class="title">
                 Pourquoi nous choisir ? 
             </h3>

             <div class="text">
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
             </div>

             <button class="link">
                 <a href="#bookings">Faire une réservation</a>
             </button>
         </div>

         <div class="reasons-section__content__picture">
             <div class="background">
                 <img src="<?php echo get_template_directory_uri();  ?>/public/images/xwegbe2.jpg" alt="appartements meublés à cotonou">
             </div>
         </div>

     
     </div>
 </div>


<?php the_content(); ?> 
<?php get_footer(); ?> 
