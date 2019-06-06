<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    require_once '../models/modelFicheClient.php'; 
    $infosPersos = getInfosPerso($_GET['id_client']);

   require_once '../models/modelGestionClient.php'; 
   $idClient = getIdClient($_GET['id_client']);

    $_SESSION["flash"] = '<p class="delete"> Fiche client de ' . $infosPersos['prenom'] . ' ' . $infosPersos['nom'] . " effacée !</p>"  ;
   
   
?>