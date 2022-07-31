<?php
// Begin of CORS things
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With,Origin,Content-Type,Cookie,Accept');
 
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 204 No Content');
    die;
}
// End of CORS things


  /*  try

{

 $pdo = new PDO('mysql:host=localhost;dbname=adra7128_wp431;charset=utf8', 'adra7128_wp431', 'C5S!95pA]4');

}

catch(Exception $e)

{

     die('Erreur : '.$e->getMessage());

}
*/
function dbConnect(){
        try
       
           {
           
           $pdo = new PDO('mysql:host=localhost;dbname=xwegbe;charset=utf8', 'root', '');
           return $pdo;
           
           }
           
           catch(Exception $e)
           
           {
           
               die('Erreur : '.$e->getMessage());
           
           }
}

//controle des input
function verifyInput($inputContent){
        $inputContent = htmlspecialchars(
            $inputContent
        );
    
        $inputContent = trim($inputContent);
    
        return $inputContent;
    }



$error = array('error' => false);

$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}



if($action == 'getAllFreeAppartments'){
        $pdo = dbConnect();
        $sql = $pdo->prepare("SELECT * FROM appartments WHERE status = ?");
        $status = 'libre';
        $sql->execute(array($status));
        $appartments = array();
        while ($row = $sql->fetch()){
                array_push($appartments, $row);
        }

        echo json_encode($appartments);
}



if($action == 'getAllAppartments'){
        $sql = $pdo->prepare("SELECT * FROM appartments");
        $sql->execute();
        $appartments = array();
        while ($row = $sql->fetch()){
                array_push($appartments, $row);
        }

      //  $results['appartments'] = $appartments;
        //echo json_encode($appartments);
}


if($action == 'bookAppartment'){
        $pdo = dbConnect();
        $id = verifyInput($_GET['id']);
        $sql = $pdo->prepare("SELECT * FROM appartments WHERE id = ?");
        $sql->execute(array($id));
        $data = $sql->fetch();
        $price = $data['price'];
        $appartment_name = $data['name'];
        
        $first_name = verifyInput($_POST['first_name']);
        $last_name = verifyInput($_POST['last_name']);
        $date_of_arrival = verifyInput($_POST['date_of_arrival']);
        $date_of_departure = verifyInput($_POST['date_of_departure']);
        $city = verifyInput($_POST['city']);
        $country = verifyInput($_POST['country']);
        $phone_number = verifyInput($_POST['phone_number']);
        $email = verifyInput($_POST['email']);
        $description = verifyInput($_POST['description']);
        $travelers = verifyInput($_POST['travelers']);
        $amount = 0;
        $status = 'Confirmé';

        //insertion
        $req = $pdo->prepare("INSERT INTO bookings SET date_of_insertion = NOW(), 
        appartment_id = ?, appartment_name = ?, user_email = ?, user_firstname = ?,
        user_lastname = ?, user_city = ?, user_country = ?, user_phone_number = ?,
        date_of_arrival = ?, date_of_departure = ?, travelers = ?, amount = ?, 
        status = ? ");

        if( $req->execute(array($id, $appartment_name, $email, $first_name,
        $last_name, $city, $country, $phone_number, $date_of_arrival, $date_of_departure,
        $travelers, $amount, $status))){
                $p = 1;
                
                
                
                ?>
<script>
alert('Merci pour cotre réservation, un mail de confirmation vous sera envoyé');
//window.location.replace('liste-appartements.php');
exit();
</script>
<?php } else{ ?>
<script>
alert('Une erreur est survenue, merci de reesayer ultérieurement');
//window.location.replace('liste-appartements.php');
exit();
</script>
<?php 
        }
}



if($action == 'getAppartment'){
$pdo = dbConnect();
$id = verifyInput(($_GET['id']));
$sql = $pdo->prepare("SELECT * FROM appartments WHERE id = ?");
$sql->execute(array($id));
$appartments = array();
while ($row = $sql->fetch()){
array_push($appartments, $row);
}

echo json_encode($appartments);
}

if($action == 'getAllBookings'){
$pdo = dbConnect();
$sql = $pdo->prepare("SELECT * FROM bookings");
$sql->execute();
$appartments = array();
while ($row = $sql->fetch()){
array_push($appartments, $row);
}

echo json_encode($appartments);
}

if($action == 'addAppartment'){
$pdo = dbConnect();
$name = verifyInput($_POST['name']);
$price = verifyInput($_POST['price']);
$rooms = verifyInput($_POST['rooms']);
$location = verifyInput($_POST['location']);
$short_description = verifyInput($_POST['short_description']);
$long_description = verifyInput($_POST['long_description']);
$picture_1 = verifyInput($_POST['picture_1']);
$picture_2 = verifyInput($_POST['picture_2']);
$picture_3 = verifyInput($_POST['picture_3']);
$picture_4 = verifyInput($_POST['picture_4']);
$picture_5 = verifyInput($_POST['picture_5']);
$wi_fi = verifyInput($_POST['wi_fi']);
$air_conditionner = verifyInput($_POST['air_conditionner']);
$free_parking = verifyInput($_POST['free_parking']);
$dryer = verifyInput($_POST['dryer']);
$oven = verifyInput($_POST['oven']);
$fridge = verifyInput($_POST['fridge']);
$private_entrance = verifyInput($_POST['privaete_entrance']);
$tv = verifyInput($_POST['tv']);
$dishes = verifyInput($_POST['dishes']);
$stars = 3;
$status = 'Libre';


$sql = $pdo->prepare("INSERT INTO appartments SET name = ?, price = ?,
rooms = ?, location = ?, short_description = ?, long_description = ?,
picture_1 = ?, picture_2 = ?, picture_3 = ?, picture_4 = ?,
picture_5 = ?, wi_fi = ?, air_conditionner = ?, stars = ?, status = ?,
free_parking = ?, dryer =?, oven = ?, fridge = ? , private_entrance = ?,
tv = ?, dishes = ?");

if( $sql->execute(array($name, $price, $rooms, $location, $short_description, $long_description,
$picture_1, $picture_2, $picture_3, $picture_4, $picture_5, $wi_fi, $air_conditionner,
$stars, $status, $free_parking, $dryer, $oven, $fridge, $private_entrance, $tv,
$dishes))){
echo 'fait';
} else{
echo 'pas fait';
}
?>
<script>
alert("L'ajout est effectif");
window.location.replace("gestion.php");
exit();
</script>
<?php
  
       
}

//$results['appartments'] = $appartments;
// echo json_encode($appartments);