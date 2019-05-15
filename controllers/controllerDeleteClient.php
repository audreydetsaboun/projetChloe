<?php
$idClient = '';
   require '../models/modelGestionClient.php'; 
   getIdClient($id_client);
   supprimerClient($idClient);

   //header('location: ../views/viewFicheClient.php?id_client=' . $idClient);
?>