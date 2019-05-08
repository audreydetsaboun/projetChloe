<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleChloe.css">
    <title>Appli Chloé</title>
</head>
<body>
    <form method="post" action="controllerConnexion.php">
        <p>
            <label for="user">Entrez votre mail : </label>
            <input type="text" name="user" id="user">
        </p>
        <p>
            <label for="mdp">Entrez votre mot de passe : </label>
            <input type="password" name="mdp" id="mdp">
        </p>
        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>
</body>
</html>