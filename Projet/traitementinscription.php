<?php

include "ConnexionPDO.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$date_naissance = $_POST['date_naissance'];
$mail = $_POST['mail'];
$postale = $_POST['postale'];
$telephone = $_POST['tel'];

$req = $bdd->prepare('INSERT INTO information VALUES(:id,:nom,:prenom,:mdp,:date_naissance,:postale,:mail,:telephone)');

 $req->execute(array( 'id'=> NULL, 'nom' => $nom, 'prenom'=> $prenom , 'mdp'=> $mdp , 'date_naissance'=> $date_naissance , 'postale' => $postale , 'mail' => $mail , 'telephone' => $telephone));
header('location: connexion.php');



 ?>
