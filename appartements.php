<?php 
    require 'db.php';
    require 'control.php';
    $appartements=displayAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php';
     ?>

    <title>Appartements</title>
</head>
<body>
    <div class="container">
    <?php include 'header.php'; ?>

        <div class="appartments">
            <h1 class="appartments__title">
                NOS APPARTEMENTS
            </h1>

            <div class="appartments__content">
                <div class="appartments__content__details">

                <?php 
                    foreach ($appartements as $appartement):
                ?>
                    <div class="item">
                    <img src="<?= $appartement->picture_1 ?>">
                        <h2 class="appartment_name">
                            <?=$appartement->appartement_name ?>
                        </h2> <br>

                        <p class="daily_price">
                            A partir de : <span> <?= $appartement->daily_price ?></span> FCFA HT
                        </p>

                        <p class="extract">
                        <?= $appartement->extract ?> 
                        </p> 

                        <p class="rooms">
                            Nombre de chambres:  <span><?= $appartement->rooms ?></span>
                        </p>

                        <div class="buttons">
                            <button class="book">
                                <a href="booking.php?id=<?php echo $appartement->id; ?>">Réserver maintenant</a>
                            </button>

                            <button class="details">
                                <a href="appartement.php?id=<?php echo $appartement->id;  ?>">Voir les détails</a>
                            </button>
                        </div>
                    </div>

                <?php  endforeach ?>
                </div>

                <form action="" class="appartments__content__form">
                    <label class="form_label">
                        Date d'arrivée: <br>
                        <input type="date" placeholder="Arrivée*" name="arrival_date">
                    </label> <br><br>

                    <label class="form_label">
                        Date de départ: <br>
                        <input type="date" placeholder="Départ*" name="departure_date">
                    </label> <br> <br>

                    <label class="form_label">
                        Nombre de voyageurs: <br>
                        <select  name="number_of_people" id="">
                                <option value="">Sélectionner</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                        </select>
                    </label> <br> <br>

                <button type="submit" class="form_submit">
                    Rechercher <i></i>
                </button>
            </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>