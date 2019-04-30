<?php
/****** page Model pour accéder à la base de données ******/

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



//renvoi la liste des clients en tableau php
function getClients(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT nom, prenom, mobile FROM FicheClient order by nom');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $clients = $request->fetchAll();
    
    //retourner un tableau avec les clients
    return $clients;
}
?>

