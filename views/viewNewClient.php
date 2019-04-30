<?php require_once '../controllers/controllerNewClient.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nouveau Client</title>
        <link rel="stylesheet" href="styleForm.css">
    </head>
    <body>
        <h1>Nouvelle Fiche Client</h1>
        <form methode="POST" action="../controllers/controllerNewClient.php">
            <!-- date de création de fiche 
            ===>>> TROUVER COMMENT LA METTRE AUTOMATIQUEMENT-->
            <p>
                <label for="date">date :</label>    
                <input type="date" id="date" name="date" autofocus> 
                <?= date('d/m/Y'); ?>
            </p>    

            <fieldset>
                <!-- infos perso -->
                <legend>Informations personnelles</legend>

                <p>
                    <label for="nom">nom :</label>    
                    <input type="text" id="nom" name="nom" required>
                </p>
                <p>
                    <label for="prenom">prénom :</label>    
                    <input type="text" id="prenom" name="prenom" required>
                </p>
                <p>
                    <label for="adresse">rue :</label>    
                    <input type="text" id="rue" name="rue" required>
                </p>
                <p>
                    <label for="cp">CP :</label>    
                    <input type="text" id="cp" name="cp" required>
                </p>
                <p>
                    <label for="ville">ville :</label>    
                    <input type="text" id="ville" name="ville" required>
                </p>
                <p>
                    <label for="fixe">téléphone fixe :</label>    
                    <input type="text" id="fixe" name="fixe" required>
                </p>
                <p>
                    <label for="mobile">mobile :</label>    
                    <input type="text" id="mobile" name="mobile" required>
                </p>
                <p>
                    <label for="mobile">mobile :</label>    
                    <input type="text" id="mobile" name="mobile" required>
                </p>
                <!-- -->
                <p class="textArea">
                <label for="partPeau">Particularités de peau :</label>  
                </p>
                <p>  
                <textarea name="partPeau" id="partPeau" cols="30" rows="10" required></textarea>
                </p>
            </fieldset>

            <!-- boutton d'envoi du formulaire -->
            <p class= "formButton">
                <input type="submit" value="Valider">
                <input type="submit" value="Annuler">
            </p>
        </form>

        <!-- boutton de retour en arrière -->
        <p id="retour">
            <a class="buttonStyle" href="viewMailbox.php">Retour</a>
        </p>
        
    </body>

</html>