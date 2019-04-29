<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nouveau Message</title>
        <link rel="stylesheet" href="styleForm.css">
    </head>
    <body>
        <h1>Nouveau Mail</h1>
        <form methode="post" action="../controllers/controllerNewMail.php">
            <fieldset>
                <legend>Paramètres</legend>
                <!-- date différée du mail -->
                <p>
                    <label for="dateDiff">date d'envoi :</label>    
                    <input type="date" id="dateDiff" name="dateDifferee" autofocus> 
                </p>

                <!-- destinataires du mail -->
                <p>
                    <label for="destinataires">destinataires :</label>    
                    <input type="email" id="destinataires" name="destinataires" required>
                </p>
                <!-- objet du mail -->
                <p>
                    <label for="objet">objet :</label>    
                    <input type="text" id="objet" name="objet" required>
                </p>
            </fieldset>
            <!-- corps du mail -->
            <p class="corpsMessage">
                <label for="corps">corps du message :</label>  
            </p><p>  
                <textarea name="corpsMessage" id="corps" cols="30" rows="10" required></textarea>
            </p>
            <!-- boutton d'envoi du formulaire -->
            <p class= "formButton">
                <input type="submit" value="Annuler">
                <input type="submit" value="Envoyer">
            </p>
        </form>

        <!-- boutton de retour en arrière -->
        <p id="retour">
            <a class="buttonStyle" href="viewMailbox.php">Retour</a>
        </p>
        
    </body>

</html>