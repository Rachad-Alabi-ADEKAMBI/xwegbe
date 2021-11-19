<?php
// Chargement des classes

/*
require_once('model/AppartementManager.php');
require_once('model/AppartementsManager.php');
require_once('model/AppartementEditor.php');

function listAppartements(){
    $appartementsManager = new Xwegbe\Model\AppartementsManager();
   
    $appartements = $appartementsManager->getAppartements();
    
    require('./view/frontend/listAppartementsView.php');
}

function appartement()
{
    $appartementManager = new Xwegbe\Model\AppartementManager();
   
    $appartement = $appartementManager->getAppartement($_GET['id']);
    
    require('./view/frontend/appartementView.php');
}


function appartement()
{
    $postManager = new \OpenClassrooms\Blog\Model\PostManager();
    $appartementManager = new \OpenClassrooms\Blog\Model\CommentManager();

    $appartement = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('./view/frontend/postView.php');
}
*/

require 'model/frontend.php'; 

function editPrice ($id){
    $AppartementManager = new Xwegbe\Model\AppartementManager();

    $affectedLines = $AppartementEditor->editPrice($id);

    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le prix');
    }
    else {
        header('Location: ./tableau-de-bord.php');
    }
}

function listSearchResults()
{
    $listSearchResults = searchResults($_GET['rooms']);

    require('view/frontend/listSearchResultsView.php');
}

function appartement()
{
    $appartement = display($_GET['appartement_id']);

    require('view/frontend/appartementView.php');
}


function listAppartements()
{
    $appartements = displayAll();

    require('view/frontend/listAppartementsView.php');
}


function bookAppartement()
{
    $bookAppartement = book($_GET['appartement_id']);

    require('view/frontend/bookView.php');
}

function homepage()
{

    require('view/frontend/indexView.php');
}

function aboutPage()
{

    require('view/frontend/aboutPageView.php');
}

function gallery()
{

    require('view/frontend/galleryView.php');
}

function contact()
{

    require('view/frontend/contactView.php');
}

function login()
{

    require('view/frontend/loginView.php');
}

function dashboard(){
  // $reservations = reservations();

    //$number_of_reservations = displayAll();
    
  //  $booked_rooms = displayAll();

    require('view/frontend/dashboardView.php');
}

function addAppartement(){
    $addAppartement = add();
  
      require('view/backend/addAppartementView.php');
}

function viewAppartements(){
    $data = view();

      require('view/backend/viewAppartementsView.php');
}




