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
    
    <main id="mainFC">
    </header>
        <!-- boutton de retour en arrière -->
        <p class="btnRetourn">
            <a class="retour" href="viewClients.php"><img src="img/retour.png" alt="retour"></a>
        </p>
        
<!--  objectif : récupérer le parametre id_client dans l'url-->
        <section id="nom">
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
            <h2>Forfait </h2>
            <article id="boutonsBdd">
                <!-- bouton Modifier client -->
                <a href="???.php"><img id="btnModif" src="img/btn_modif.png" alt=""></a>
                <!-- bouton ajout nouveau forfait -->
                <a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>
            </article>

            <!-- appeler ici un forfait s'il y en a un -->
            <!-- PROBLEME : s'affiche pas au bon endroit mais en tete du document... -->
            <?php echo testForfait($_GET['id_client']); ?>
            
        </section>

        <!-- SECTION VISITES-->
        <section id="visites">
            <h2>Visites</h2>
            <!-- bouton ajout nouvelle visite -->
            <a href="???.php"><img id="plus" src="img/Plus.png" alt=""></a>
            <!-- afficher ici les visites qui ont eu lieu -->
<!-- pour l'instant, affiche toutes les visites -->
<!-- trouver comment n'afficher que les visites du client consulté -->
            <?php echo getVisites($_GET['id_client']); ?>
            
        </section>

        <!-- SECTION MESSAGES-->
        <section id="messRecus">
            <h2>Messages reçus</h2>
            <!-- afficher ici les 5 derniers messages reçus -->
            <?php echo getMail($_GET['id_client']);?>
            
        </section>
    </main>

        <!-- boutton de retour en arrière -->
        <p class="btnRetourn">
        <a class="retour" href="viewClients.php"><img src="img/retour.png" alt="retour"></a>
        </p>

        <!-- boutton supprimer -->
        <!-- trouver comment supprimer en SQL à partir de cette page-->
        <p id="btnSupprimer">
            <img id="supprimer" src="img/poubelle.png" alt="supprimer fiche client">
        </p>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>