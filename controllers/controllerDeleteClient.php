<?php
    require_once '../models/modelFicheClient.php'; 
    $infosPersos = getInfosPerso($_GET['id_client']);



   require_once '../models/modelGestionClient.php'; 
   $idClient = getIdClient($_GET['id_client']);


   supprimerClient($idClient);

   //header('location: ../views/viewFicheClient.php?id_client=' . $idClient);
?>