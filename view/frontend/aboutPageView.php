<?php $title = 'Xwegbe - A propos';  ?>
    <?php ob_start(); ?>
    
        <div class="about">
            <h1 class="about__title">
                A PROPOS
            </h1>

            <div class="about__content">
                <img src="public/images/xwegbe.jpeg" alt="" 
                class="about__content__image">

                <div class="about__content__text">
                    <p class="paragraph">
                        Nous sommes une entreprise de 
                        locations d’appartements meubles a 
                        cotonou et environs.
                        Nous avons des appartments disponibles pour tout type de sejours et pour tous les budgets.
                        Merci de nous faire confiance depuis bientot  3 ans.
                    </p>
                </div>
            </div>
        </div>

<?php  $content = ob_get_clean(); 

require('view/template.php'); ?>