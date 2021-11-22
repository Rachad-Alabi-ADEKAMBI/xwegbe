<?php 
session_start();

//include 'model/frontend.php';

    $title = 'Xwegbe - Inscription';

     ob_start(); ?>

        <div class="register" id="register">
            <form  action="model/registration.php" method="post">
                
                 <?php include 'view/errorsView.php' ?>

                <h1>
                Inscription Admin
                </h1>
                   
                    <label for="shop_area" class="form__label">
                        Pseudo: <br>
                        <input type="text" name="username" id="username" required>
                    </label> <br>
                
                 <label for="email" class="form__label">
                     Email: <br>
                     <input type="email" id="email" name="email" required>
                 </label> <br>

                 <label for="email" class="form__label">
                     Mot de passe: <br>
                     <input type="password" id="password1" name="password1" required>
                 </label> <br>

                 <label for="email" class="form__label">
                     Veuillez confirmer : <br>
                     <input type="password" id="password2" name="password2" required>
                 </label> <br>

                <button type="submit" class="form__button">
                    Valider
                </button> 
             
            </form>
        </div>
    
    <?php $content = ob_get_clean(); 
   
   require('view/template.php'); ?>