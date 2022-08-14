<?php get_header() ?>
        <div class="top">
              <h1 class="site_title" >Bienvenue sur <span>XWEGBE !</span></h1>
  
              <form action="" method="POST"  id="bookings" class="top__research-form" >
            
                      <label class="top__research-form__label">
                          Date d'arrivée: <br>
                          <input type="date" placeholder="Arrivée*" name="arrival_date">
                      </label>
  
                      <label class="top__research-form__label">
                     Date de départ
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
                             Chercher <i></i>
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
                                  <a href="a-propos.php">En savoir plus</a>
                              </button>
                  </div>
              </div>
          </div>
    
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

           <div class="posts-section">
           <?php while(have_posts()) : the_post(); ?>
                <div class="item">
                    <h3 class="item__title"> <?php the_title() ?> </h1>
                    <img src="" alt="" class="item__picture">

                    <div class="item__text">
                         <?php the_content(); ?> <br>
                         
                         <p>
                             Auteur:  <?php the_author(); ?>
                         </p> <br>
                              <a href=" <?= get_post_type_archive_link('post') ?>">Tous les articles</a>
</div>
                </div>

             <?php endwhile;  ?>
           </div>
        


<?php get_footer() ?>
