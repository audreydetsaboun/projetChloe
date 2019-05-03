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

        <section id="nom">
            <!-- <?php // $client['prenom']; ?> <?php // $client['nom']; ?>
            ne fonctionne pas, trouver comment appeler une personne spécifique 
            après avoir cliqué sur sa ligne dans viewClients.php -->
            <h1 id="prenomClient">Prénom</h1> 
            <h1 id="nomClient">NOM</h1> 
        </section>
        <section id="boutonsBdd">
            <!-- bouton Modifier client -->
            <a href="???"><img id="modif" src="img/btn_modif.png" alt=""></a>
        </section>

        <!-- SECTION INFO PERSONNELLES-->
        <section id="infosPerso">
        <p>Fixe : </p>
        <p>Mobile : </p>
        <p>Mail : </p>
        <p>adresse : </p>
        <!-- rue
        cp + ville -->
        <p>Particularités : </p>
        </section>

        <!-- SECTION FORFAIT-->
        <section id="forfait">
            <h2>Forfait</h2>
            <!-- bouton Modifier client -->
            <a href="???.php"><img id="modif" src="img/btn_modif.png" alt=""></a>
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

            <?php foreach ($infosPersos as $infosPerso): ?>
                <article>
                    <p><?= $infosPerso['nom']; ?></p>
                    <p><?= $infosPerso['prenom']; ?></p>
                    <p><?= $infosPerso['mobile']; ?></p>
                </article>
                <?php endforeach; ?>
            
        </section>

        <!-- SECTION MESSAGES-->
        <section id="messRecus">
            <h2>Messages reçus</h2>
            <!-- afficher ici les 5 derniers messages reçus -->
        </section>
    </main>

        <p><button>Retour</button></p>

        <p><button>Supprimer fiche</button></p>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>