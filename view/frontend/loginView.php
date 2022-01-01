<?php $title = 'Xwegbe - Connexion'; 

                    if(!empty($_POST)){ 
                        include ('model/frontend.php');
                        $db=dbConnect();

                        $errors = array ();

                        if(isset($_POST['email'], $_POST['pass'])
                            &&!empty($_POST['email'] && !empty($_POST['pass']))
                            ){
                                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                                    $errors['email'] = 'Veuillez entrer un email correct';
                                }

                        
                            $sql = "SELECT * FROM `users` WHERE `email` = ?";

                            $query = $db -> prepare($sql);

                            $query->execute([verifyInput($_POST['email'])]);

                            $user = $query->fetch();

                            if(!$user){
                                $errors['email'] = 'Utilisateur/mot de passe incorrect';
                            }

                            if(!password_verify($_POST['pass'], $user['pass'])){
                                $errors['email'] = 'Utilisateur/mot de passe incorrect';
                            }

                            if(empty($errors)){

                                session_start(); 

                                $_SESSION['user'] = [
                                    "username" => $user['username'],
                                    "role" => $user['role']
                                ];
                                    header("Location: index.php?action=dashboard"); 
                            }         
                        } 
                            }               
                    ?>

<?php ob_start(); ?>

    <div class="register">
        <?php include 'view/errorsView.php'; ?>

        <form  action="" method="post">

               <h1>
               Connexion
               </h1> <br>
               
                <label for="email" class="form__label">
                    Email: <br>
                    <input type="email" id="email" name="email" required>
                </label> <br><br>

                <label for="email" class="form__label">
                    Mot de passe: <br>
                    <input type="password" id="pass" name="pass" required>
                </label> <br>

               <button type="submit" class="form__button">
                   Valider
               </button> <br>

               <label for="">  <input type="checkbox" class="checkbox"> Mot de passe oublié ?
                  
               </label> <br>
            
           </form>
    </div> 

    <?php $content = ob_get_clean(); 
   
   require('view/template.php'); ?>
