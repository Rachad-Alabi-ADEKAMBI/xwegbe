<?php
include 'control.php';
if(isset($_POST['valider'])){

    $errors = array ();

    if (empty ($_POST['appartement_name'])) {
        $errors['appartement_name'] = "Nom non valide";
    } /*else{
        $req = $pdo->prepare('SELECT appartement_name FROM appartements WHERE 
        appartement_name= ? ');
        $req->execute([$_POST['appartement_name']]);
        $result = $req->fetch();
        if($result){
            $errors['appartement_name'] = "Ce nom est déjà utilisé";
        }
    }*/

    if (empty($_POST['rooms'])|| !preg_match('/^[0-9]+$/', $_POST['rooms'])){
                $errors['rooms'] = "Veuillez définir le nombre de chambres";
    }

    if (empty($_POST['daily_price']) || !preg_match('/^[0-9]+$/', $_POST['daily_price'])){
        $errors['daily_price'] = "Veuillez définir le tarif";
    }

    if (empty ($_POST['extract'])) {
        $errors['extract'] = "Veuillez définir un résumé";
    }

    if (empty ($_POST['appartement_description'])) {
        $errors['appartement_description'] = "Veuillez définir une description";
    }

    if (empty ($_POST['rating'])) {
        $errors['rating'] = "Veuillez définir un nombre d'étoiles";
    }

    if (empty ($_POST['picture_1'])) {
        $errors['picture_1'] = "Veuillez définir la photo 1";
    }

    if (empty ($_POST['picture_2'])) {
        $errors['picture_2'] = "Veuillez définir la photo 2";
    }

    if (empty ($_POST['picture_3'])) {
        $errors['picture_3'] = "Veuillez définir la photo 3";
    }

    if (empty ($_POST['picture_4'])) {
        $errors['picture_4'] = "Veuillez définir la photo 4";
    }

    if (empty ($_POST['picture_5'])) {
        $errors['picture_5'] = "Veuillez définir la photo 5";
    }

    if (empty ($_POST['picture_6'])) {
        $errors['picture_6'] = "Veuillez définir la photo 6";
    }

    if(empty($errors)){
        $appartement_name = htmlspecialchars($_POST['appartement_name']);
        $rooms = htmlspecialchars($_POST['rooms']);
        $daily_price = htmlspecialchars(strip_tags($_POST['daily_price']));
        $extract = htmlspecialchars($_POST['extract']);
        $appartement_description = htmlspecialchars($_POST['appartement_description']);
        $rating = htmlspecialchars($_POST['rating']);
        $picture_1 = htmlspecialchars($_POST['picture_1']);
        $picture_2 = htmlspecialchars($_POST['picture_2']);
        $picture_3 = htmlspecialchars($_POST['picture_3']);
        $picture_4 = htmlspecialchars($_POST['picture_4']);
        $picture_5 = htmlspecialchars($_POST['picture_5']);
        $picture_6 = htmlspecialchars($_POST['picture_6']);
                try{
                        add($appartement_name, $rooms, $daily_price, 
                        $extract, $appartement_description, $rating, $picture_1,
                       $picture_2, $picture_3, $picture_4, $picture_5, $picture_6);
                }catch (Exception $e)
                {
                    $e->getMessage();
                }
    }

}

if (!empty($errors)):?>

    <div class="alert" width=400>
       <p>
       Vous n'avez pas rempli le formulaire correctement
       </p>
            <ul>
                <?php foreach ($errors as $error): ?>   
                <li><?= $error; ?></li>
                <?php endforeach;?>
            </ul>
    </div>
    <?php endif; ?>
