<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    require_once '../models/modelFicheClient.php'; 
    $infosPersos = getInfosPerso($_GET['id_client']);


   require_once '../models/modelGestionClient.php'; 
   $idClient = getIdClient($_GET['id_client']);

   supprimerClient($infosPersos);

//   header('Fiche client effacée !'); //message n'apparait pas
    $_SESSION["flash"] = "<center>Fiche client de " . $infosPersos['prenom'] . ' ' . $infosPersos['nom'] . " effacée !</center>"  ;
   header('location: ../views/viewClients.php');
   
?>