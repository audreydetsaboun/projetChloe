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
?>

