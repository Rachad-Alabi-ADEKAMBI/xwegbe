<?php
function str_random($length){
    $alphabet="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

// obtenir le titre de la page
function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
  
  $current_page = PageName();

//controle des input
function verifyInput($inputContent){
    $inputContent = htmlspecialchars(
        $inputContent
    );

    $inputContent = trim($inputContent);

    return $inputContent;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=xwegbe;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function bookings(){
	$db = dbConnect();
	$req = $db->prepare("SELECT id
            FROM reservations WHERE reservation_status ='en cours'");

        $req->execute();

		$numberOfbookings = $req->rowCount();

		$bookings = $req->fetch();

        return $bookings;
}

function view()
{
	$db = dbConnect();
	
     //on determine sur quelle page on se trouve
     if (isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);

    }else{
        $currentPage = 1;
    }

    //on determine le nombre de clients total

    $sql= "SELECT COUNT(id) AS nb_customers 
    FROM appartements ";

    $query = $db->prepare($sql);

    $query->execute();

    $numberOfPages = $query->fetch();

    $nbcustomers = (int) $numberOfPages['nb_customers'];

    //on détermine le nombre de clients par pages
    $parPage = 5;

    //On calcule le nombre total de pages
    $pages = ceil($nbcustomers / $parPage);

    //Calcul du premier client
    $premier = ($currentPage * $parPage) - $parPage; 

    $req = $db->prepare('SELECT *
    FROM appartements
    ORDER BY id DESC
    LIMIT :premier, :parpage');

    $req->bindValue(':premier', $premier,  PDO::PARAM_INT);
    $req->bindValue(':parpage', $parPage, PDO::PARAM_INT);

    $req->execute();

    return $req;

}