<?php session_start();

$title = 'Xwegbe - Espace-administrateur - Liste des appartements'; ?>
      
<?php ob_start(); ?>
      
    <div class="dashboard">
            <div class="dashboard__menu">
                <?php include 'dashboardMenuView.php' ?>
            </div>

            <div class="dashboard__main">
                <div class="dashboard__main__heading">
                    <div class="dashboard-title">
                        <h1>
                            Liste des appartements
                        </h1>
                        
                    </div>
                </div>

                <div class="dashboard__main__background">
                    <div class="list">
                        <table>
                            <tr>
                                <th>Nom Appartement</th>
                                <th>Tarif journalier</th>
                            </tr>

                            <?php 
                                while ($article = $data->fetch()) { ?>
                                <tr>
                                    <td><?= $article['appartement_name'] ?></td>
                                    <td><?= $article['daily_price'] ?></td>
                                    <td>
                                        <button class="edit" >
                                            <a href="modifier-prix.php?id=<?= $article['id'] ?>">Modifier prix</a>
                                        </button>
                                    </td>

                                    <td>
                                        <button class="delete" >
                                            <a href="supprimer-appartement.php?id=<?= $article['id'] ?>">Supprimer</a>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                }
                            ?>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <!--<div class="pages"> <br>
                                        <ul class="pagination">
                                                            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?> ">
                                                                <a href="liste-des-appartements.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                                                            </li>
                                                        
                                                            <?php   for ($page = 1; $page <= $pages; $page++): ?>

                                                            <li class="page-item <?= ($currentPage == $page) ? "active": "" ?> ">
                                                                <a href="liste-des-appartements.php?page=<?= $page ?>" class="page-link"> <?= $page ?></a>
                                                            </li>
                                                    
                                                            <?php endfor ?>
                                                            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?> ">
                                                                <a href="liste-des-appartements.php?page=<?= $currentPage + 1 ?>"  class="page-link">Suivante</a>
                                                            </li>
                                        </ul>
                                                            --></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    
<?php  $content = ob_get_clean(); 

require('view/template.php'); ?>