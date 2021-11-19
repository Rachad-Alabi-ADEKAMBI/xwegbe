
<?php $title = 'Xwegbe - Liste des appartements'; ?>

<?php ob_start(); ?>
<h1>Liste des appartements !</h1>

<div class="appartements">
    <div class="appartements__content"> 
        <div class="appartements__content__details">

            <?php
                while ($data= $appartements->fetch())   
                { ?>
                            <div class="item">
                                        <img src="$data[]">

                                            <h2 class="appartement_name">
                                            <?= htmlspecialchars($data['appartement_name']) ?>
                                            </h2> <br>

                                            <p class="daily_price">
                                                A partir de : <span> <?= htmlspecialchars($data['daily_price']) ?></span> FCFA HT
                                            </p>

                                            <p class="extract">
                                            <?= htmlspecialchars($data['extract']) ?>
                                            </p> 

                                            <p class="rooms">
                                                Nombre de chambres:  <span><?= htmlspecialchars($data['rooms']) ?></span>
                                            </p>

                                            <div class="buttons">
                                                <button class="book">
                                                    <a href="index.php?action=bookAppartement&amp;appartement_id=<?php echo htmlspecialchars($data['id']) ?>">Réserver</a>
                                                </button>

                                                <button class="details">
                                                    <a href="index.php?action=appartement&amp;appartement_id=<?php echo htmlspecialchars($data['id']) ?>">Voir les détails</a>
                                                </button>
                                            </div>
                            </div>  
            <?php } ?>
        </div>
    
        <form action="" method="POST" class="appartements__content__form">  
            <?php  include 'view/errorsView.php'; ?>

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
                <select  name="rooms" id="">
                        <option value="">Sélectionner</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                </select>
            </label> <br> <br>

            <button type="submit" class="form_submit">
                Rechercher 
            </button>
        </form>
    </div>
</div>

<?php
$appartements->closeCursor();

 $content = ob_get_clean(); 

 require('view/template.php'); ?>
