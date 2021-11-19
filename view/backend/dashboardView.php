<?php $title = 'Xwegbe - Espace administrateur'; ?>
   

<?php ob_start(); ?>
    <div class="container">
        <div class="dashboard">
            <div class="dashboard__menu">
                <?php include 'dashboardMenuView.php' ?>
            </div>

            <div class="dashboard__main">
                <div class="dashboard__main__heading">
                    <div class="dashboard-title">
                        <h1>
                            Espace admin Xwegbe
                        </h1>
                        
                        <p>
                            Content de vous revoir mr Elfried
                        </p>
                    </div>

                    <div class="dashboard__heading__infos">
                        <div class="user-logo">
                            0
                        </div>

                        <div class="user-name">
                            0
                        </div>
                    </div>
                </div>

                <div class="dashboard__main__background">
                    <div class="boxes">
                        <div class="boxes__item">
                            <span>0</span> <br>
                            <p>Total Appartements</p>
                        </div>

                        <div class="boxes__item">
                            <span>0</span> <br>
                            <p>Réservations</p>
                        </div>

                        <div class="boxes__item">
                            <span>0</span> <br>
                            <p>Appartements occupés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
 $content = ob_get_clean(); 

 require('template.php'); ?>