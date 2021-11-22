<?php session_start(); ?>

<?php $title = 'XWGEBE - Appartement'; ?>

<?php ob_start(); ?>
    <div class="container">
       <div class="appartement">
            <div class="appartement__content">
                <div class="appartement__content__details">
                    <p><img src="" alt=""> Retour</p>
                      <?php  while(	$data = $appartement->fetch()){ ?>
                            <h1 class="appartment_name">
                            <?= $data['appartement_name'] ?>
                            </h1>

                            <p class="appartement_extract">
                            <?= $data['extract'] ?> 
                            </p>

                            <p class="appartement_description">
                                <?= $data['appartement_description'] ?>
                            </p>
                            

                            <button class="book">
                                <a href="reservation.php">
                                    Reserver
                                </a>
                            </button>
                        <?php } ?>
                </div> 
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
