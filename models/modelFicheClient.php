<?php
/****** page Model pour accéder à la base de données 
 * et faire une recherche SQL spécifique ******/
 
require_once('dbConnexion.php');


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
// test s'il y a un forfait en cours pour le client, si oui afficher le forfait 
// si non afficher la phrase "il n'y a pas de forfait en cours pour cette cliente"
function testForfait($id_client){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT * FROM Forfait WHERE id_client = :id_client');
    $request->bindParam('id_client', $id_client);
    $request->execute();
    $forfaits = $request->fetchall();
    
    if($forfaits){
        //return $forfait;
        foreach($forfaits as $forfait):
            $infosForfait = '';
            $infosForfait .= '<article id="infosForfait"><h3>' . $forfait['nom_forfait'] .'</h3>'; //changer le format de date 
            $infosForfait .=  '<p>Date : '. $forfait['date_forfait'] . '</p>';
            $infosForfait .=  '<p>Zone : ' . $forfait['zone_corps'] . '</p>';
            $infosForfait .=  '<p>Durée : ' . $forfait['duree_seance'] . ' mn</p>';
            $infosForfait .=  '<p>Séances : '. $forfait['qte_seances'] . '</p>';
            $infosForfait .=  '<p>Prises : '. $forfait['qte_effectuee'] . '</p>';
            $infosForfait .=  '<p>Reste : ' . $forfait['qte_restante'] . '</p>';
            $infosForfait .=  '<p>Montant : ' . $forfait['prix_forfait'] . '</p>';
            $infosForfait .=  '<p>Payé : '. $forfait['montant_regle'] . '</p>';
            $infosForfait .=  '<p>Reste à payer : ' . $forfait['reste_a_payer'] . '</p></article>';
            return $infosForfait;
        endforeach;
    }else{
        return '<article id="infosForfait"><p>Il n\'y a pas de forfait en cours pour cette cliente.</p></article>';
    }
}


//SECTION VISITES
//renvoi les visites du client seulement sur la fiche client associée via id client
function getVisites($id_client){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT * FROM VisitesClient WHERE id_client = :id_client ORDER BY date_visite DESC');
    $request->bindParam('id_client', $id_client);
    $request->execute();
    $visites = $request->fetchall();

    if(!empty($visites)){
        //echo '<br/><span  class="infosVisites">Date</span <span class="infosVisites">Soin</span> <span class="infosVisites"></span><span class="infosVisites">Montant dépensé</span>';
        foreach($visites as $visite){
            $infosVisites = '';
            $infosVisites .= '<a id="lienFC" href="FicheClient.php">';
            $infosVisites .= '<article class="articleVisite>';
            $infosVisites .= '<span class="infosVisites">' . $visite['date_visite'] . '</span>';
            $infosVisites .= '<span class="infosVisites">' . $visite['soin'] . '</span>';
            $infosVisites .= '<span class="infosVisites">' . $visite['montant_depenses'] . ' euros</span>';
            $infosVisites .= '</article></a>';
            echo $infosVisites;// affiche les infos 2 fois : 1 fois en haut de la page et 1 fois là où je veux
       // return $infosVisites;// n'affiche les infos que sur un seul tour au lieu d'afficher toutes les lignes
    }
    }else{
        return '<article id="infosMail"><p>Il n\'y a pas de mails pour cette cliente.</p></article>';
        }
    }


//SECTION MESSAGES 
//renvoi les messages appartenant seulement au client sur la fiche client associée via id client
function getMail($id_client){
    $bddChloe = getBdd();
    $request = $bddChloe->prepare('SELECT m.* FROM mail m INNER JOIN Messagerie mg ON mg.id_mail=m.id_mail WHERE mg.id_client=:id_client ORDER BY m.date_mail DESC');
    $request->bindParam('id_client', $id_client);
    $request->execute();
    $mails = $request->fetchAll();

    if(!empty($mails)){ 
        foreach($mails as $mail){
            $listeMail = '';
            $listeMail .= '<a id="lienFC" href="viewMailbox.php">';
            $listeMail .= '<article class="articleMail>';
            $listeMail .= '<span class="infosMail">' . $mail['date_mail'] . '</span>';
            $listeMail .= '<span class="infosMail">' . $mail['objet'] . '</span>';
            $listeMail .= '</article></a>';
            echo $listeMail; // affiche les infos 2 fois : 1 fois en haut de la page et 1 fois là où je veux
            //return $listeMail; // n'affiche les infos que sur un seul tour au lieu d'afficher toutes les lignes 
        }
    }else{
        return '<article id="infosMail"><p>Il n\'y a pas de mails pour cette cliente.</p></article>';
        }
    }



//à finaliser...
function getTexto(){
    $bddChloe = getBdd();
    $request = $bddChloe->query('SELECT texto, date_texto, date_differee, corps_message FROM Texto');
    $request->execute();
    $textos = $request->fetchAll();
    return $textos;
}
/*
function getMessages(){
    getMail();
    getTexto();
}*/
?>

