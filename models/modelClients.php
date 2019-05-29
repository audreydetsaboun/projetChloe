<?php
/****** page Model pour accéder à la base de données 
 * et faire une recherche SQL spécifique ******/
 
require_once('dbConnexion.php');



//renvoi la liste des clients en tableau php
function getClients(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT id_client, nom, prenom, mobile FROM FicheClient order by nom');
    //executer la requete
    $request->execute();
    //récupérer les données et les affecter dans une variable
    $clients = $request->fetchAll();
    
    //retourner un tableau avec les clients
    return $clients;
}
?>

