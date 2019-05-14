<?php
    $nom = $prenom = $rue = $cp = $ville = $fixe = $mobile = $partPeau = '';
   function securite($donnees){
       $donnees = trim($donnees);
       $donnees = stripslashes($donnees);
       $donnees = strip_tags($donnees);
       return $donnees;
   }
   $idClient = securite($_POST['id_client_hidden']);
   $nom = securite($_POST['nom']);
   $prenom = securite($_POST['prenom']);
   $rue = securite($_POST['rue']);
   $cp = securite($_POST['cp']);
   $ville = securite($_POST['ville']);
   $fixe = securite($_POST['fixe']);
   $mobile = securite($_POST['mobile']);
   $mail = securite($_POST['mail']);
   $partPeau = securite($_POST['partPeau']);

   require '../models/modelGestionClient.php'; 

   modifierClient($idClient, $nom, $prenom, $rue, $cp, $ville, $fixe, $mobile, $mail, $partPeau);

   header('location: ../views/viewFicheClient.php?id_client=' . $idClient);
?>