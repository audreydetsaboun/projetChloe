<?php require_once '../controllers/controllerDeleteClient.php' ?>
<?php //require_once '../controllers/controllerFicheClient.php' ?>
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

    <main>
        <p>Êtes-vous certain de vouloir supprimer cette fiche client ?</p>
        <p>
            <a  href="?id_client=<?= $infosPersos['id_client']; ?>&action=supprimer">
                <button type="submit">SUPPRIMER</button>
            </a>
        </p>
        <p>
            <a href="viewFicheClients?id_client=<?= $infosPersos['id_client']; ?>.php">
                <button type="submit">Annuler</button>
            </a>
        </p>
			<?php 
				if(isset($_GET['action'])){
                    supprimerClient($idClient);
                }
            ?>
    </main>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>