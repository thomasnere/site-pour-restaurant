<?php
include('connexionPDO.php');
$req=$bdd->prepare('SELECT mail, mdp FROM connex WHERE mail = :mail AND mdp = :mdp');
$req->execute(array('mail'=>$_POST['mail'],'mdp'=>$_POST['mdp']));

$result = $req->fetch();


elseif($req->rowCount() == 1) {
    setcookie('id', $result['id'], time()+3600, '/');
    header('location: membre.php');
  } else {
    echo 'raté';
  }


?>
