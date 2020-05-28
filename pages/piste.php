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
                    La moto sur piste est particulière, et les équipements obligatoires pour la pratiquer le sont aussi !
                </p>
                <p>
                    Ces équipements ne se retrouvent pas forcément dans les autres types de moto...
                </p>
                <p>
                    C'est pourquoi Nolark vous présente cette vidéo conçue par "<a href="https://pistards.poirsouille.org/" target="_blank">Poirsouille Endurance Team</a>" qui
                    vous indique les équipements nécessaires et conseillés pour faire de la moto sur piste...
                </p>
            </article>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YdxPOoBbCLw" frameborder="0"></iframe>
        </section>
        <?php include('../includes/casques.inc.php'); ?>
        <?php include('../includes/footer.html.inc.php'); ?>
    </body>
</html>
