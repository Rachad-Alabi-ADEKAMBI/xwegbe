<?php 
    require 'control.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>Xwegbe-Supprimer appartement</title>
</head>
<body>
    <div class="container">
        <div class="delete">
            <p class="delete__back-link">
                <img src="" alt=""> <a href="admin.php">Retour au tableau de bord</a>
            </p>

            <form action="supprimer.php"  method="POST" class="delete__form">
                    <h1 class="delete__form__title">
                        Supprimer un appartement
                    </h1>

                    <label for="" class="delete__form__label">
                        Id appartement: <br>
                        <input type="number" name="id">
                    </label> <br>

                    <button type="submit" name="valider"
                    class="delete__form__button">
                        Supprimer
                    </button>
            </form>
        </div>
    </div>
</body>
</html>

