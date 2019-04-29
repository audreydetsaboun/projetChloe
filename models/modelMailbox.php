<?php
/****** page Model pour accéder à la base de données ******/

//db connexion
function getBdd(){
    $bdd = new PDO ('mysql:host=localhost;dbname=ChloeBdd;charset=utf8', 'root', 'root');
    return $bdd;
}

//renvoi la liste des clients en tableau php
function getMessages(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT date_mail, objet FROM Mail order by date_mail');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $messages = $request->fetchAll();
    
    //retourner un tableau avec les clients
    return $messages;
}
?>