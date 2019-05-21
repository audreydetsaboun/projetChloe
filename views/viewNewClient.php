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
        <form method="POST" action="../controllers/controllerNewClient.php">
            <!-- date de création de fiche 
            ===>>> TROUVER COMMENT LA METTRE AUTOMATIQUEMENT-->
            <p>
                <label for="date">date :</label>    
                <!--<input type="date" id="date" name="date" autofocus> -->
                <?= date('d/m/Y'); ?>
            </p>    

            <fieldset>
                <!-- infos perso -->
                <legend>Informations personnelles</legend>

                <p>
                    <label for="nom">nom :</label>    
                    <input id="nameField" class="renseignement" type="text" id="nom" name="nom" required>
                </p>
                <p>
                    <label for="prenom">prénom :</label>    
                    <input class="renseignement" type="text" id="prenom" name="prenom" required>
                </p>
                <p>
                    <label for="adresse">rue :</label>    
                    <input class="renseignement" type="text" id="rue" name="rue" >
                </p>
                <p>
                    <label for="cp">CP :</label>    
                    <input class="renseignement" type="text" id="cp" name="cp" >
                </p>
                <p>
                    <label for="ville">ville :</label>    
                    <input class="renseignement" type="text" id="ville" name="ville" >
                </p>
                <p>
                    <label for="fixe">téléphone fixe :</label>    
                    <input class="renseignement" type="text" id="fixe" name="fixe" >
                </p>
                <p>
                    <label for="mobile">mobile :</label>    
                    <input class="renseignement" type="text" id="mobile" name="mobile" >
                </p>
                <!-- -->
                <p class="textArea">
                <label for="partPeau">Particularités de peau :</label>  
                </p>
                <p>  
                <textarea name="partPeau" id="partPeau" cols="30" rows="10" ></textarea>
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
        
        <script type="text/javascript">
            document.getElementById('nameField').focus()
        </script>
    </body>

</html>