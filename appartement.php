<?php 
    require 'db.php';
    require 'control.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'meta.php'; ?>

    <title>XWGEBE - Appartement</title>
</head>
<body>
    <div class="container">
       <div class="appartment">
            <div class="appartment__content">
                <div class="appartment__content__details">
                    <p><img src="" alt=""> Retour</p>

                    <?php

                    $req = $bdd->prepare('SELECT appartement_name, extract,
                    appartement_description, daily_price, appartment_status
                    FROM appartements WHERE id= ?');

                    $req -> execute([$_GET['id']]);

                    while ($appartment = $req->fetch())
                   {
                   ?>
                    
                    <h1 class="appartment_name">
                        <?= $appartment['appartement_name'] ?> 
                    </h1>

                    <p class="appartment_extract">
                    <?= $appartment['extract'] ?> 
                    </p>

                    <p class="appartment_description">
                        <?= $appartment['appartement_description'] ?>
                    </p>

                    <button class="book">
                        <a href="reservation.php">
                            Reserver
                        </a>
                    </button>
                <?php
                }
                ?>

                    

                </div>

                <div class="appartment__content__form">
                    <form action="" class="appartment__content__form">
                        <label class="form_label">
                            Date d'arrivée: <br>
                            <input type="date" placeholder="Arrivée*" name="arrival_date">
                        </label> <br> <br>
    
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
                        </label> <br>
    
                    <button type="submit" class="form_submit">
                        Rechercher <i></i>
                    </button>
                </form>
                </div>
            </div>
<!--
            <div class="appartment__gallery">
                <div class="appartment__gallery__top">
                    <img src= <?= $appartment['picture_1'] ?> alt="">
                    <img src= <?= $appartment['picture_1'] ?>alt="">
                    <img src= <?= $appartment['picture_1'] ?>alt="">
                </div>

                <div class="appartment__gallery__bottom">
                    <img src= <?= $appartment['picture_1'] ?> alt="">
                    <img src= <?= $appartment['picture_1'] ?> alt="">
                </div>
               
            </div>
->
                    
       </div>
    </div>
    
</body>
</html>