<?php require_once '../controllers/controllerClient.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleChloe.css">
    <title>Fichier Clients</title>
</head>

<body>
    <header>
        <?php include('header.inc.php'); ?>
    </header>
            
    <main>
        <h1 id="titreBdd">Fichier Clients</h1> 

        <div id="boutonsBdd">
            <!-- bouton ajout nouveau client -->
            <a href="new_customer.php"><img id="plus" src="img/Plus.png" alt=""></a>

            <!-- bouton exportation BDD-->
            <a href="export_db.php"><img id="dl" src="img/dl.png" alt=""></a>
        </div>

        <!--barre de recherche-->
        <!--https://informagenie.com/1693/barre-de-recherche-site-php-mysql/-->
        <form name="recherche">
            <input type="search" placeholder="Rechercher..." name="barreRecherche" id="" value=""/>
            <input type="button" onclick="" value="ok">
        </form>

        <!-- liste des clients -->
        <!--https://j-reaux.developpez.com/tutoriel/php/affichage-donnees-tableau-html/-->
        
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <!-- COMMENT INSERER UN LIEN VERS CHAQUE FICHE CLIENT ??? -->
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $client['nom']; ?></td>
                    <td><?= $client['prenom']; ?></td>
                    <td><?= $client['mobile']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>