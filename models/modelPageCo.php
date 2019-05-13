<?php
    require_once('dbConnexion.php');

    $mail = $_POST['email'];
    $mdp = $_POST['mdp'];

    $requete = "SELECT * FROM Utilisateur WHERE id = '$mail' ";
    $result = $bdd->prepare($requete);
    $result->execute();

    if($result->rowCount() > 0){

    }else{
         echo 'Votre identifiant ou votre mot de passe est incorrect, veuillez réessayer.';
    }
?>