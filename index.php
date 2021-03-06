<!DOCTYPE html>
<!--
Page web créé dans le cadre du cours de web Dev le 29/01/2020
Auteur : Aurink GRELLET
Email : aurink.grellet@gmail.com
-->
<html lang="fr-FR">
    <head>
        <link href="css\styles.css" rel="stylesheet" type="text/css">
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Aurink GRELLET">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include('includes/header.html.inc.php'); ?>
	<section id="principal">
            <article>
                <img src="images\post-it.png" alt="Post-It : Penser à rentrer en vie">
                <p>
                    Au-delà de l'obligation légale, le port d'un casque est le garant de votre
                    sécurité. Le choix de votre casque doit se faire en fonction de vos besoins 
                    (route, cross, piste...).
                </p>
                <p>
                    Spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous 
                    propose des milliers de modèles de casques disponibles au travers de plus de 
                    50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, 
                    modulable, transformable, piste, cross ou encore un large choix de casques moto 
                    enfant (taille et poids spécialement adaptés).
                </p>
                <p>
                    Nolark c'est également la disponibilité de toutes les couleurs et matières et 
                    ce, pour toutes les bourses.
                </p>
                <p>
                    Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin 
                    de trouver le modèle qui correspond à vos besoins.
                </p>
                <p>
                    Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe 
                    de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de 
                    répondre au mieux à vos attentes.
                </p>
            </article>
            <aside>
                <img src="images\conseilcasque01.jpg" alt="Conseil du mois : Casque Cross">
                <p>Pour le style: Furious replica</p>
                <img src="images\conseilcasque02.jpg" alt="Conseil du mois : Intégral Piste">
                <p>Pour le confort: Stars racing</p>
            </aside>
        </section>
	<section id="categories">
            <h1>Catégories les plus populaires</h1>
            <article id="gauche"><a href="route.html">Route</a></article>
            <article id="centre"><a href="cross.html">Cross</a></article>
            <article id="droite"><a href="piste.html">Piste</a></article>
        </section>
        <?php include('includes/footer.html.inc.php'); ?>
    </body>
</html>