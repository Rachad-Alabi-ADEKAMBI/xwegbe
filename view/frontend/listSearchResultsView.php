<?php $title = 'Xwegbe - Resultats de la recherche'?>

<?php ob_start(); ?>
<h1>Xwegbe - Resultats de la recherche</h1>

<p><a href="./index.php">Retour à l'accueil</a></p>

    <div class="container">
            <div class="appartements">
                <h1 class="appartements__title">
                    Resultats de la recherche
                </h1>
                <?php
                    while ($datas= $listSearchResults->fetch())   
                        { ?>
                            <div class="appartements__content">
                                <div class="appartements__content__details"> 
                                    <div class="item">
                                        <img src="public/images/xwegbe.png">

                                        <h2 class="appartement_name">
                                            <?=$datas['appartement_name']?>
                                        </h2> <br>

                                        <p class="daily_price">
                                            A partir de : <span> <?php echo $datas['daily_price'] ?></span> FCFA HT
                                        </p>

                                        <p class="extract">
                                        <?php echo nl2br(htmlspecialchars($datas['appartement_name'])) ?> 
                                        </p> 

                                        <p class="rooms">
                                            Nombre de chambres:  <span><?php echo  nl2br(htmlspecialchars($datas['rooms'])) ?></span>
                                        </p>

                                        <div class="buttons">
                                            <button class="book">
                                                <a href="reservation.php?id=<?php $datas['id'] ?>">Réserver maintenant</a>
                                            </button>

                                            <button class="details">
                                                <a href="appartement.php?id=<?php $datas['id'] ?>">Voir les détails</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                <?php } ?>
            </div>
    </div>     

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
