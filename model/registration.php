<?php if (!empty ($_POST)){
    include 'frontend.php'; 
    $db = dbConnect();
    
        if (empty ($_POST['username']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
            $errors['username'] = "pseudo non valide";
        } else{
            $req = $db->prepare('SELECT username FROM users WHERE username = ?');
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
            if($user){
                $errors['username'] = "Ce pseudo est déjà pris";
            }
        }

        if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] ='Email non valide';
        } else{
            $req = $db->prepare('SELECT id FROM users WHERE email = ?');
            $req->execute([$_POST['email']]);
            $email = $req->fetch();
            if($email){
                $errors['email'] = "Ce email est déjà utilisé";
            }
        }

        if
         (empty($_POST['password1'])) {
            $errors['password1'] = "Vous devez rentrer un mot de passe";
        }

        if (empty($_POST['password2'])) {
            $errors['password2'] = "Vous devez confirmer le mot de passe";
        }

        if ($_POST['password2'] != $_POST['password1']){
            $errors['password2'] = "Les mots de passe ne correspondent pas";
        }

        if(empty($errors)){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = password_hash($_POST['password1'], PASSWORD_BCRYPT);

        $req = $db->prepare("INSERT INTO users SET username=?, 
        email= ?, pass = ?, role = 'admin' ");
        
        $req->execute(array($_POST['username'], $_POST['email'], $pass));
        ?>
            <script>
                alert("compte crée avec succès, vous serez rédirigé vers la page de connexion")
                    window.location.replace("../index.php?action=login");
            </script>
        <?php
        }
    
    }