<?php
    require 'control.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Xwegbe-Modifier appartement</title>
</head>
<body>
    <div class="container">
        <div class="add">
            <p class="add__back-link">
                <img src="" alt=""> <a href="admin.php">Retour au tableau de bord</a>
            </p>

            <form action="modifier.php"  method="POST" class="add__form">
                    <h1 class="add__form__title">
                    Modifier appartement
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

                    <div class="add__form__pictures">
                        <label for="" class="form__pictures__label">
                            Photo 1: <br>
                            <input type="file" name="picture_1" >
                        </label>

                        <label for="" class="__label">
                            Photo 2: <br>
                            <input type="file" name="picture_2" >
                        </label>

                        <label for="" class="label">
                            Photo 3 <br>
                            <input type="file" name="picture_3" >
                        </label>
                    </div> <br>

                    <div class="add__form__pictures">
                        <label for="" class="">
                            Photo 4 <br>
                            <input type="file" name="picture_4" >
                        </label>

                        <label for="" class="">
                            Photo 5: <br>
                            <input type="file" name="picture_5" >
                        </label>

                        <label for="" class="">
                            Photo 6: <br>
                            <input type="file" name="picture_6" >
                        </label>
                    </div> <br>

                    <button type="submit" name="valider"
                    class="add__form__button">
                        Valider
                    </button>
            </form>
        </div>
    </div>
</body>
</html>

