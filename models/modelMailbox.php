<?php
/****** page Model pour accéder à la base de données ******/

require_once('dbConnexion.php');


//renvoi la liste des clients en tableau php
function getMails(){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT date_mail, objet FROM Mail order by date_mail');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $mails = $request->fetchAll();

    //retourner un tableau avec les clients
    return $mails;
}
function getTextos(){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT date_texto, corps_message FROM Texto order by date_texto');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $textos = $request->fetchAll();

    //retourner un tableau avec les clients
    return $textos;
}



?>