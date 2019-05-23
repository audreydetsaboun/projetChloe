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

        <div class="boutons">
                <a id="mail" class="buttonStyle" href="ViewNewMail.php">envoi mail</a>
                <a id="texto" class="buttonStyle" href="ViewNewTexto.php">envoi sms</a>
        </div>

        <div class="boiteM">

            <h2>Messages envoyés</h2>

            <section>
            <h3>Mails envoyés</h3>
                <table class="messenger">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Objet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mails as $mail): ?>
                        <tr>
                            <td><span class="infosMail"><?= date('d/m/Y',strtotime($mail['date_mail'])); ?></span></td>
                            <td><span class="infosMail"><?= $mail['objet']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>
            </section>

            <section>
            <h3>Texto envoyés</h3>
                <table class="messenger">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($textos as $texto): ?>
                        <tr>
                            <td><span class="infosMail"><?= date('d/m/Y',strtotime($texto['date_texto'])); ?></span></td>
                            <td><span class="infosMail"><?= $texto['corps_message']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </div>

    </main>

    <footer>
        <?php include('footer.inc.php'); ?>
    </footer>
</body>
</html>