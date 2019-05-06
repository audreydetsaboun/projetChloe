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
function getInfosPerso($id_client){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT * FROM FicheClient where id_client = :id_client');
    $request->bindParam("id_client", $id_client);
    $request->execute();

    //récupérer les données et les affecter dans une variable
    $infosPersos = $request->fetch();
    
    //retourner un tableau avec les clients
    return $infosPersos;
}

//SECTION FORFAIT
//ici tester s'il y a un forfait en cours pour le client, si oui afficher le forfait 
// si non afficher la phrase "il n'y a pas de forfait en cours pour cette cliente"
function testForfait($id_client){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT * FROM Forfait WHERE id_client = :id_client');
    $request->bindParam('id_client', $id_client);
    $request->execute();
    $forfait = $request->fetch();
    
    if($forfait){
        return $forfait;
        //echo '<h3>' . $forfait['nom_forfait'] .'</h3>'; //changer le format de date 
        //echo '<p>Date : '. $forfait['date_forfait'] . '</p>';
        //echo '<p>Zone : ' . $forfait['zone_corps'] . '</p>';
        //echo '<p>Durée : ' . $forfait['duree_seance'] . ' mn</p>';
        //echo '<p>Séances : '. $forfait['qte_seances'] . '</p>';
        //echo '<p>Prises : '. $forfait['qte_effectuee'] . '</p>';
        //echo '<p>Reste : ' . $forfait['qte_restante'] . '</p>';
        //echo '<p>Montant : ' . $forfait['prix_forfait'] . '</p>';
        //echo '<p>Payé : '. $forfait['montant_regle'] . '</p>';
        //echo '<p>Reste à payer : ' . $forfait['reste_a_payer'] . '</p>';
    }else{
        echo 'Il n\'y a pas de forfait en cours pour cette cliente.';
    }
}


//SECTION VISITES
function getVisites(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT * FROM VisitesClient');
    $request->execute();
    $visites = $request->fetch();
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

