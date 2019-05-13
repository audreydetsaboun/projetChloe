<?php
    $nom = $prenom = $rue = $cp = $ville = $fixe = $mobile = $partPeau = '';
   function securite($donnees){
       $donnees = trim($donnees);
       $donnees = stripslashes($donnees);
       $donnees = strip_tags($donnees);
       return $donnees;
   }
   $nom = securite($_POST['nom']);
   $prenom = securite($_POST['prenom']);
   $rue = securite($_POST['rue']);
   $cp = securite($_POST['cp']);
   $ville = securite($_POST['ville']);
   $fixe = securite($_POST['fixe']);
   $mobile = securite($_POST['mobile']);
   $partPeau = securite($_POST['partPeau']);

   require_once '../models/modelNewClient.php'; 

   $idClient = ajouterClient($nom, $prenom, $rue, $cp, $ville, $fixe, $mobile, $mail, $partPeau);

   header('location: ../views/viewFicheClient.php?id_client=' . $idClient);
?>