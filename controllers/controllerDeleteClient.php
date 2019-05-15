<?php

   require '../models/modelGestionClient.php'; 

   supprimerClient($idClient);

   header('location: ../views/viewFicheClient.php?id_client=' . $idClient);
?>