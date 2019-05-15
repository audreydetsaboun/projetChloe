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
            <a  href="?id_client=<?= $infosPersos['id_client']; ?>&action=modifier">
                <img id="btnModif" id="modif" src="img/btn_modif.png" alt="">
            </a>
        </section>
			<?php 
				if(isset($_GET['action'])){
					include('viewFicheClient-modification.php');
				}else{
					include('viewFicheClient-affichage.php');
				}
            ?>		
    </main>

        <!-- boutton de retour en arrière -->
        <p class="btnRetourn">
            <a class="retour" href="viewClients.php">
            <img src="img/retour.png" alt="retour"></a>
        </p>

        <!-- boutton supprimer -->
        <p id="btnSupprimer">
            <a href="viewSupprimerClient.php">
                <img id="supprimer" src="img/poubelle.png" alt="supprimer fiche client">
            </a>
        </p>
        

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>