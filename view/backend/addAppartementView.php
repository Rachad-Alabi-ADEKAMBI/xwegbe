<?php session_start(); 
/*
if(!isset($_SESSION['user'])){
    header("Location: connexion.php");
    exit;
}
*/
?>

<head>
   <?php $title = 'Xwegbe - Ajouter un appartement'; ?>
</head>
<?php ob_start(); ?> 

<body>
        <div class="add">
                        <form action=""
                          method="POST" class="add__form">

                            <?php  if (!empty($errors)):?>

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
                                        
                                        <a href="tableau-de-bord.php">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        
                                        <h1 class="add__form__title">
                                            Ajout d'appartement
                                        </h1>

                                        <div class="add__form__details">
                                            <label class="">
                                                Nom de l'appartement: <br>
                                                <input type="text" class="appartement_name"
                                                    name="appartement_name">
                                            </label>
                                            
                                            <label for="" >
                                                Chambres: <br>
                                                <input type="number" name="rooms" 
                                                    class="rooms"> 
                                            </label>

                                            <label for="" class="">
                                                Prix: <br>
                                                <input type="number" name="daily_price"
                                                    class="daily_price">
                                            </label>
                                        </div> <br> <br>

                                        <label for="" class="add__form__label">
                                            Courte description: <br>
                                            <input type="text-area" name="extract" class="extract"
                                                >
                                        </label> <br> <br>

                                        <label for="" class="add__form__label">
                                            Description: <br>
                                            <input type="text-area" name="appartement_description" 
                                                class="appartement__description">
                                        </label> <br> <br>

                                        <label for="rating"  class="add__form__label">
                                            Nombre d'étoiles: <br>
                                            <select name="rating" id="">
                                                <option value="">Veuillez selectionner</option>
                                                <option value="1">1 étoile</option>
                                                <option value="2">2 étoiles</option>
                                                <option value="3">3 étoile</option>
                                                <option value="4">4 étoiles</option>
                                                <option value="5">5 étoiles</option>
                                            </select>
                                        </label> <br><br>

                            

                                    <button type="submit" name="valider"
                                    class="add__form__button">
                                        Ajouter
                                    </button>
                        </form>
                    </div>
        </div>
</body>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>