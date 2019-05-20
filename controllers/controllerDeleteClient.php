<?php
    require_once '../models/modelFicheClient.php'; 
    $infosPersos = getInfosPerso($_GET['id_client']);


   require_once '../models/modelGestionClient.php'; 
   $idClient = getIdClient($_GET['id_client']);

   supprimerClient($infosPersos);

   header('Fiche client effacée !'); //message n'apparait pas
   header('location: ../views/viewClients.php');
   
?>