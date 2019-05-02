<!DOCTYPE>
<html>
    <head><title>Controleur</title> 
    <meta charset = "utf-8">
</head>
<body>
    

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

   echo '<p>tu t\'appelles ' . $prenom . ' ' . $nom . ' et tu habites ' . $rue . ' ' . $cp . ' ' . $ville .' </p>';
   echo '<p>on peut te contacter en appelant au ' . $fixe . ' ou au ' . $mobile . '.</p>';
?>

</body>
</html>