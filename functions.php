<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=xwegbe;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    

$error = array('error' => false);
$action = '';

if(isset($_GET['action'])){
        $action = $_GET['action'];
}

if($action == 'getAllAppartments'){
        $sql = $pdo->prepare("SELECT * FROM appartments");
        $sql->execute();
        $appartments = array();
        while ($row = $sql->fetch()){
                array_push($appartments, $row);
        }
      //  $results['users'] = $appartments;
        echo json_encode($appartments);
}



// $sql->closeCursor();
?>