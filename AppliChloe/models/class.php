<?php

// UTILISATEURS
    class Utilisateur{
        private $prenom;
        private $id;
        private $mdp;
    }

    /*
    public function logIn(mdp){
        $mdp = '';
    }

    public function logOut(){

    }
    */


    // PARTIE CLIENTS

    class Clientele{
        // comment mettre en attribut une list array de clients donc d'objet fiche client ?
        // private FicheClient{}

        public function afficherClientele(){};
        public function extraireBdd(){};
        
    }

    class FicheClient{
        private $nom;
        private $prenom;
        private $adresse;
        private $fixe;
        private $mobile;
        private $mail;
        private $partPeau;
        private $forfait; // tester si un forfait est en cours, afficher oui ou non
        private $dateInscription; 
    
        public function newClient(){} // est ce que c'est un setter?
        public function modifClient(){}
        public function supprimerClient(){}
        public function consultMessRecu(){} // lien vers la méthode de Messagerie
        // faut il faire une fonction pour afficher s'il y a un forfait ou un getter suffit il?
    }

    class Forfait{
        private $dateForfait;
        private $dureeSeance;
        private $qteSeances;
        private $qteEffectuee;
        private $qteRestante;
        private $prixForfait;
        private $montantRegle;
        private $resteAPayer;
        private $zoneCorps;

        public function resteAPayer(){}
        public function qteSeancesRestantes(){}
        public function creerForfait(){}
    }

    class VisitesClients{
        private $dateVisite;
        private $soin;
        private $produitsAchetes;
        private $montantDepenses;
        private $promo;
        private $cadeau;
        private $forfait; //réponse par oui ou non

        public function setVisite(){}
        public function getVisite(){}
        public function modifierLigne(){}
        public function supprimerLigne(){}
    }


    // PARTIE MESSAGERIE

    class Messagerie{
        public function supprimerMessage(){}
    }

    class Mail{
        private $dateMail;
        private $destinaires; // a été enlevé dans la table, dois-je le garder
        private $objet;
        private $corpsMail;
        private $pJ;
        private $signature;
        private $dateDiffereeM;
        
        public function $dateDiff(){}
        public function $envoyerMail(){}
        public function $ajoutPhoto(){}
        public function $choixDestinataires(){}
    }

    class Media{
        private $titre;
        private $lien;
    }

    class Texto{
        private $dateTexto;
        private $destinaires; // a été enlevé dans la table, dois-je le garder
        private $dateDiffereeT;
        private $corpsTexto;
        
        public function $dateDiff(){}
        public function $envoyerTexto(){}
        public function $choixDestinataires(){}
    }

?>