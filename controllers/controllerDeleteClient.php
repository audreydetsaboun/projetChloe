<?php
    require_once '../models/modelFicheClient.php'; 
    $infosPersos = getInfosPerso($_GET['id_client']);

    

   require_once '../models/modelGestionClient.php'; 
   $idClient = getIdClient($_GET['id_client']);


  // supprimerClient($idClient);
   supprimerClient($infosPersos);


   header('location: ../views/viewClients.php');
   //print("Fiche Client effacée !");
?>