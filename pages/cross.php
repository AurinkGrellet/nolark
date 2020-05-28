<!DOCTYPE html>
<!--
Page web créé dans le cadre du cours de web Dev le 29/01/2020
Auteur : Aurink GRELLET
Email : aurink.grellet@gmail.com
-->
<html lang="fr-FR">
    <head>
        <link href="..\css\styles.css" rel="stylesheet" type="text/css">
        <link href="..\css\casques.css" rel="stylesheet" type="text/css">
        <link href="..\css\video.css" rel="stylesheet" type="text/css">
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Aurink GRELLET">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section id="video">
            <article>
                <img src="../images/attention.png" alt="Post-It : Penser à rentrer en vie">
                <p>
                    La moto cross ne se soustrait pas aux dangers des deux roues, bien au contraire !
                </p>
                <p>
                    Rouler sur des chemins rend en effet votre appareil plus dur à manipuler !
                </p>
                <p>
                    C'est pourquoi Nolark vous présente cette vidéo conçue par le "<a href="https://centredeliquidationduquebec.com" target="_blank">Centre de Liquidation du Québec</a>" qui
                    vous font de la pub pour leurs casques... Protégez-vous !
                </p>
            </article>
            <iframe src="https://player.vimeo.com/video/331560006" width="640" height="360" frameborder="0"></iframe>
        </section>
        <?php include('../includes/casques.inc.php'); ?>
        <?php include('../includes/footer.html.inc.php'); ?>
    </body>
</html>
