<?php
require('controller/frontend.php');

try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listAppartements') {
            listAppartements();
        }

        elseif ($_GET['action'] == 'appartement') {

            if (isset($_GET['appartement_id']) && $_GET['appartement_id'] > 0) {
                appartement();
            }

            else {
                echo 'Erreur : aucun id envoyé';
            }
        }

        elseif ($_GET['action'] == 'listSearchResults') {
            listSearchResults();
        }

        elseif ($_GET['action'] == 'bookAppartement') {
            if (isset($_GET['appartement_id']) && $_GET['appartement_id'] > 0) {
                bookAppartement();
            }
            else {
                echo 'Erreur : aucun id envoyé';
            }
        }

        elseif ($_GET['action'] == 'aboutPage') {
            aboutPage();
        }

        elseif ($_GET['action'] == 'gallery') {
            gallery();
        }

        elseif ($_GET['action'] == 'contact') {
            contact();
        }

        elseif ($_GET['action'] == 'login') {
            login();
        }

        elseif ($_GET['action'] == 'homepage') {
            homepage();
        }

        elseif ($_GET['action'] == 'dashboard') {
            dashboard();
        }

        elseif ($_GET['action'] == 'addAppartement') {
            addAppartement();
        }

        elseif ($_GET['action'] == 'viewAppartements') {
            viewAppartements();
        }

      
    }

    else {
      //  listSearchResults();

        homepage(); 
    }
}

catch(Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    require('view/frontend/errorsView.php');
}

