<?php
/****** page Model pour accéder à la base de données 
 * et faire une recherche SQL spécifique ******/
 
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


// SECTION INFOS PERSO
//renvoi la liste des clients en tableau php
function getInfosPerso(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT nom, prenom, mobile, fixe, mail, adresse, CP, ville, particularites FROM FicheClient');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $infosPersos = $request->fetchAll();
    
    //retourner un tableau avec les clients
    return $infosPersos;
}

//SECTION VISITES
function getVisites(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT * FROM VisitesClient');
    $request->execute();
    $visites = $request-fetchAll();
    return $visites;
}


//SECTION MESSAGES 
//trouver comment renvoyer les messages appartenant envoyés seulement au client sur la fiche client associée
function getMail(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT id_mail, date_mail, date_differee, objet, corps_message FROM Mail');
    $request->execute();
    $mails = $request->fetchAll();
    return $mails;
}

function getTexto(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT texto, date_texto, date_differee, corps_message FROM Texto');
    $request->execute();
    $textos = $request->fetchAll();
    return $textos;
}
function getMessages(){
    getMail();
    getTexto();
}
?>

