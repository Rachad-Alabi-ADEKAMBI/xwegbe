<?php $title = 'Xwegbe - Connexion'; ?>

<?php ob_start(); ?>

    <div class="login">
        <form action="" method="POST" class="form">
                        <a href="index.php" class="form__close-btn">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>

                        <h1 class="form__title">
                            Connexion
                        </h1>

                        <label class="form__label" for="pwd"> 
                            Email : <br>
                            <input type="text" placeholder="Email" name="email" >
                        </label> <br><br> <br>

                        <label class="form__label" for="pwd"> 
                            Mot de passe : <br>
                        <input type="password" placeholder="Mot de passe" name="pass" >
                        </label> <br>

                        <button type="submit" value="submit" 
                        class="form__button">
                            Se connecter
                        </button>
                        <!--
                        <p class="form__text1">
                            Pas encore de compte ? <a href="offres.php">Inscrivez-vous ici</a>
                        </p>

                        <a class="form__text2" href="mot-de-passe-oublie.php">
                            Mot de passe oublié ?
                        </a>
        -->
        </form>
    </div>

    <?php $content = ob_get_clean(); 
   
   require('view/template.php'); ?>