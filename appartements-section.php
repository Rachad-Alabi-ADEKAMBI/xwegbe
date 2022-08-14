<?php

include 'db.php';
 
?>
 
<html>
<head>
<link rel="stylesheet" type="text/css" href="test2.css" />
</head>
 
<body>
 
<div id="slider">
<ul>
<?php
$reponse=$bdd->query('SELECT * FROM appartements');
while ($donnees = $reponse->fetch())
{
?>
 
<li>
<div class="slider-container">
<p>
<?php echo $donnees['picture'];
		?><br><br> <?php echo $donnees['appartement_name']." - " .$donnees['appartement-price']." - " .$donnees['appartement_status']?></p>
 </div>
</li>
 
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
 
</ul>
</div>
