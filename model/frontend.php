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

function searchResults(){
	$db = dbConnect();

	if (!empty ($_POST)){

		$errors = array ();
	
		if (empty ($_POST['arrival_date'])) {
			$errors['arrival_date'] = "Date d'arrivée non valide";
		} 
	
	   if (empty ($_POST['departure_date'])) {
		   $errors['departure_date'] = "Date de départ non valide";
	   }
	
	   if(empty($_POST['rooms'])){
		$errors['rooms'] ='Nombre de chambres non valide';
	   }
	
	   if(empty($errors))
	   	{
            $req = $db->prepare("SELECT * 
            FROM appartements WHERE rooms = ? and 
              appartement_status = 'libre'");

            $req->execute(array($_GET['rooms']));   

            $listSearchResults = $req->fetch();
		   ?>
				 <script>
					 alert("Merci de votre réservation, un email de confirmation vous sera envoyé")
					//window.location.replace("index.php");
				</script>
		   <?php
		    return $listSearchResults;
		}
	}
}

       // header('Location: index.php?action=listSer');


function display(){
    $db = dbConnect();

        $req = $db->prepare('SELECT * 
            FROM appartements WHERE id= ?');

        $req->execute(array($_GET['appartement_id']));

		$appartement = $req->fetch();
        return $appartement;
}

function displayAll()
{
        $db = dbConnect();
        
        $req = $db->prepare("SELECT * FROM appartements ORDER BY id DESC");
        $req->execute();
    // $req->fetch();
        return $req;
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

function book(){
	$db = dbConnect();

	if (!empty ($_POST)){

		$errors = array ();
	
		if (empty ($_POST['first_name'])) {
			$errors['first_name'] = "Prénom non valide";
		} 
	
	   if (empty ($_POST['last_name'])) {
		   $errors['last_name'] = "Nom non valide";
	   }
	
	   if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email'] ='Email non valide';
	   }
	
		if (empty ($_POST['adress'])) {
			$errors['adress'] = "Adresse non valide";
		}
	
		if (empty ($_POST['phone_code']) || !preg_match('/^[0-9]+$/', $_POST['phone_code'])) {
			$errors['phone_code'] = "Code non valide";
		}   
	
		if (empty ($_POST['phone_number']) || !preg_match('/^[0-9]+$/', $_POST['phone_number'])) {
			$errors['phone_number'] = "Numéro non valide";
			} 
			
		if (empty ($_POST['arrival_date'])) {
			$errors['arrival_date'] = "Date d'arrivée non valide";
			} 
	
		if (empty ($_POST['departure_date'])) {
				$errors['departure_date'] = "Date de départ non valide";
				} 
	
	   if(empty($errors))
	   	{
		
			$req = $db->prepare("INSERT INTO reservations SET date_of_insertion=NOW(), 
				first_name = ?, last_name = ?, email = ?, adress = ?, phone_code = ?,
				phone_number = ?, arrival_date = ?, departure_date = ?, appartement_id = ?,
				appartement_name = ?");
	
				$first_name = verifyInput($_POST['first_name']);
				$last_name = verifyInput($_POST['last_name']);
				$email = verifyInput($_POST['email']);
				$adress = verifyInput($_POST['adress']);
				$phone_code = verifyInput($_POST['phone_code']);
				$phone_number = verifyInput($_POST['phone_number']);
				$arrival_date = verifyInput($_POST['arrival_date']);
				$departure_date= verifyInput($_POST['departure_date']);
				$appartement_id= verifyInput($_GET['appartement_id']);
				$appartement_name = verifyInput($_GET['appartement_name']);
				
				$req -> execute(array($first_name, $last_name, $email, $adress, $phone_code,
						$phone_number,$arrival_date, $departure_date, $appartement_id, $appartement_name));
				

		   ?>
				 <script>
					 alert("Merci de votre réservation, un email de confirmation vous sera envoyé")
					window.location.replace("index.php");
				</script>
		   <?php
		   return $req;
		}
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

function add(){
    if(isset($_POST['valider'])){
		$db = dbConnect();

        $errors = array ();
    
        if (empty ($_POST['appartement_name'])) {
            $errors['appartement_name'] = "Nom non valide";
        } else{
                    $req = $db->prepare('SELECT appartement_name FROM appartements WHERE 
                    appartement_name= ? ');
                    $req->execute([$_POST['appartement_name']]);
                    $result = $req->fetch();
                    if($result){
                        $errors['appartement_name'] = "Ce nom est déjà utilisé";
            }
        }
    
        if (empty($_POST['rooms'])|| !preg_match('/^[0-9]+$/', $_POST['rooms'])){
                    $errors['rooms'] = "Veuillez définir le nombre de chambres";
        }
    
        if (empty($_POST['daily_price']) || !preg_match('/^[0-9]+$/', $_POST['daily_price'])){
            $errors['daily_price'] = "Veuillez définir le tarif journalier";
        }
    
        if (empty ($_POST['extract'])) {
            $errors['extract'] = "Veuillez définir un résumé";
        }
    
        if (empty ($_POST['appartement_description'])) {
            $errors['appartement_description'] = "Veuillez définir une description";
        }
    
        if (empty ($_POST['rating'])) {
            $errors['rating'] = "Veuillez définir un nombre d'étoiles";
        }
    
           if(empty($errors)){
            $appartement_name = verifyInput($_POST['appartement_name']);
            $rooms = verifyInput($_POST['rooms']);
            $daily_price = verifyInput(strip_tags($_POST['daily_price']));
            $extract = verifyInput($_POST['extract']);
            $appartement_description = verifyInput($_POST['appartement_description']);
            $rating = verifyInput($_POST['rating']);

			$req = $db->prepare("INSERT INTO appartements (
				appartement_name, rooms, daily_price, extract,
				appartement_description, rating) VALUES (? , ? , ? , ? , ? , ?)");

			$req -> execute(array($appartement_name, $rooms, $daily_price,
			 $extract, $appartement_description, $rating));
			?>
			 <script>
			 alert("Appartement ajouté avec succcès");
			 window.location.replace("index.php?action=dashboard");
	 </script>
	 ?<?php
	 return $req;
        }
    
    }
}

function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}
	
