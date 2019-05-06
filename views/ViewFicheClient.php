<?php require_once '../controllers/controllerFicheClient.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleChloe.css">
    <title>Fiche Client</title>
</head>

<body>
    <header>
        <?php include('header.inc.php'); ?>
    
    <main>
    </header>
        <button>Retour</button>
<!--  objectif : récupérer le parametre id_client dans l'url-->
        <section id="nom">
            <!-- <?php // $client['prenom']; ?> <?php // $client['nom']; ?>
            ne fonctionne pas, trouver comment appeler une personne spécifique 
            après avoir cliqué sur sa ligne dans viewClients.php -->
            <h1 id="prenomClient"><?= $infosPersos['prenom']; ?></h1> 
            <h1 id="nomClient"><?= $infosPersos['nom']; ?></h1> 
        </section>
        <section id="boutonsBdd">
            <!-- bouton Modifier client -->
            <a  href="???"><img id="btnModif" id="modif" src="img/btn_modif.png" alt=""></a>
        </section>

        <!-- SECTION INFO PERSONNELLES-->
        <section id="infosPerso">
            <p>Fixe : <?= $infosPersos['fixe']; ?></p>
            <p>Mobile : <?= $infosPersos['mobile']; ?></p>
            <p>Mail : <?= $infosPersos['mail']; ?></p>
            <p>adresse : </p>
            <p><?= $infosPersos['adresse']; ?></p>
            <p><?= $infosPersos['CP']; ?> <?= $infosPersos['Ville']; ?></p>
            <!-- rue
            cp + ville -->
            <p>Particularités : <?= $infosPersos['particularites']; ?></p>
        </section>

        <!-- SECTION FORFAIT-->
        <section id="forfait">
            <h2>Forfait</h2>
            <!-- bouton Modifier client -->
            <a href="???.php"><img id="btnModif" src="img/btn_modif.png" alt=""></a>
            <!-- bouton ajout nouveau forfait -->
            <a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>

            <!-- appeler ici un forfait s'il y en a un -->
        </section>

        <!-- SECTION VISITES-->
        <section id="visites">
            <h2>Visites</h2>
            <!-- bouton ajout nouvelle visite -->
            <a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>
            <!-- afficher ici les visites qui ont eu lieu -->
<!-- pour l'instant, affiche toutes les visites -->
<!-- trouver comment n'afficher que les visites du client consulté -->
            <?php foreach ($visites as $visite): ?>
                <article>
                    <p><?= $visite['date']; ?></p>
                    <p><?= $visite['soin']; ?></p>
                    <p><?= $visite['achat_produit']; ?></p>
                    <p><?= $visite['montant_depenses']; ?></p>
                    <p><?= $visite['promo']; ?></p>
                    <p><?= $visite['cadeau']; ?></p>
                    <p><?= $visite['forfait']; ?></p>
                </article>
            <?php endforeach; ?>
            
        </section>

        <!-- SECTION MESSAGES-->
        <section id="messRecus">
            <h2>Messages reçus</h2>
            <!-- afficher ici les 5 derniers messages reçus -->
            <ul>
                <?php foreach ($mails as $mail): ?>
                    <li>
                        <a id="lienMess" href="viewMess.php?id_mess=<?= $mail['id_mess']; ?>">
                            <span id="col1"><?= $mail['date_mail']; ?> </span>
                            <span id="col2"><?= $mail['objet']; ?> </span>
                            <span id="col3"><?= $mail['corps_message']; ?></span> <!--trouver comment afficher que le début -->
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

        <p><button>Retour</button></p>

        <p><button>Supprimer fiche</button></p>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>