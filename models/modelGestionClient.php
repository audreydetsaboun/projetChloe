<?php
    require_once('dbConnexion.php');
    
    
    //ajouter un nouveau client
    function ajouterClient($nom, $prenom, $rue, $cp, $ville, $fixe, $mobile, $mail, $partPeau){
        $bddChloe = getBdd();

        $sql = "INSERT INTO FicheClient (id_client, nom, prenom, adresse, CP, Ville, fixe, mobile, mail, particularites, date_inscription) 
        VALUES (NULL, '$nom', '$prenom', '$rue', '$cp', '$ville', '$fixe', '$mobile', '$mail', '$partPeau', CURRENT_DATE())";

        $bddChloe->exec($sql);

        return $bddChloe->lastInsertId();
    }    
    
    /* Modifier un client */
    function modifierClient($idClient, $nom, $prenom, $rue, $cp, $ville, $fixe, $mobile, $mail, $partPeau){
        $bddChloe = getBdd();

        $sql = "UPDATE FicheClient SET
			nom ='$nom',
			prenom ='$prenom',
			adresse ='$rue',
			CP ='$cp',
			Ville ='$ville',
			fixe ='$fixe',
			mobile ='$mobile',
			mail ='$mail',
			particularites ='$partPeau'
			
			WHERE id_client = $idClient
		";

        $bddChloe->exec($sql);

        return $idClient;
    }
    
    // Supprimer un client
    function getIdClient($id_client){
        $bddChloe = getBdd();
        $request = $bddChloe->prepare('SELECT id_client FROM FicheClient where id_client = :id_client');
        $request->bindParam("id_client", $id_client);
        $request->execute();
        $idClient = $request->fetch();
        return $idClient;
    }

    function supprimerClient($idClient){
        $bddChloe = getBdd();

        $sql = "DELETE FROM FicheClient WHERE id_client = $idClient";
    }

?>