<?php
    try
    {
        //db connexion
        function getBdd(){
            $bdd = new PDO ('mysql:host=localhost;dbname=ChloeBdd;charset=utf8', 'root', 'root');
            return $bdd;
        }
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    
    
    
    //ajouter un nouveau client
    function ajouterClient($nom, $prenom, $rue, $cp, $ville, $fixe, $mobile, $mail, $partPeau){
        $bddChloe = getBdd();

        $sql = "INSERT INTO FicheClient (id_client, nom, prenom, adresse, CP, Ville, fixe, mobile, mail, particularites, date_inscription) 
        VALUES (NULL, '$nom', '$prenom', '$rue', '$cp', '$ville', '$fixe', '$mobile', '$mail', '$partPeau', CURRENT_DATE())";

        $bddChloe->exec($sql);

        return $bddChloe->lastInsertId();
    }

?>