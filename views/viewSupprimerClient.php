<?php 
require_once '../controllers/controllerDeleteClient.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleChloe.css">
    <title>Supprimer Client</title>
</head>
<body>
    <header>
        <?php include('header.inc.php'); ?>
    </header>

    <main id="suppClient">
        <section id="section1">
            <p>Êtes-vous certain de vouloir supprimer cette fiche client ?</p>
        </section>
        <section id="section2">
        <h1 id="prenomClient"><?= $infosPersos['prenom']; ?></h1> 
            <h1 id="nomClient"><?= $infosPersos['nom']; ?></h1> 
        </section>
        <section id="section3">
            <p>
                <a  href="?id_client=<?= $infosPersos['id_client']; ?>&action=supprimer">
                    <button class="button" type="submit">SUPPRIMER</button>
                </a>
            </p>
            <p>
                <a href="viewFicheClient.php?id_client=<?= $infosPersos['id_client']; ?>">
                    <button class="button" type="submit">Annuler</button>
                </a>
            </p>
                <?php 
                    if(isset($_GET['action'])){
                        supprimerClient($idClient);
                        header('location: ../views/viewClients.php');
                    }
                ?>
        </section>
    </main>
    
    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>