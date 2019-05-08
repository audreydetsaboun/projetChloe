<?php require_once '../controllers/controllerMailbox.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleChloe.css">
    <title>Messagerie</title>
</head>

<body>
    <header>
        <?php include('header.inc.php'); ?>
    </header>
            
    <main id="mainMessagerie">
        <h1>Messagerie</h1>

        <p class="boutons">
            <div id="aside1">
                <a id="mail" class="buttonStyle" href="ViewNewMail.php">envoi mail</a>
            </div>
            <div id="aside2">
                <a id="texto" class="buttonStyle" href="new_text.php">envoi sms</a>
            </div>
        </p>

        <h2>Messages envoyés</h2>
        <table id="messages">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Objet</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?= $message['date_mail']; ?></td>
                    <td><?= $message['objet']; ?></td>
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