<!DOCTYPE html>
<!--
Page web créé dans le cadre du cours de web Dev le 27/05/2020
Auteur : Aurink GRELLET
Email : aurink.grellet@gmail.com
-->
<html>
    <head>
        <link href="..\css\styles.css" rel="stylesheet" type="text/css">
        <link href="..\css\alcoolemie.css" rel="stylesheet" type="text/css">
        <script src="..\js\alcoolemie.js" type="text/javascript"></script>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Aurink GRELLET">
        <meta name="description" content="Découvrez les amendes et les sanctions liées à l'alcoolémie avec notre application de prévention !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section id="formulaire">
            <h1>Simulateur de calcul pour la force de vente :</h1>
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="simulation">
                    <legend>Votre simulation : </legend>
                    <p><label for="num_poids">Votre poids :</label> <input type="number" name="num_poids" id="num_poids" min="0" max="200" value="0" /></p>
                    <fieldset id="sexe">
                        <legend>Votre sexe : </legend>
                        <p><input type="radio" name="rd_sexe" value="homme" id="rd_sexehomme" checked="checked" /> <label for="rd_sexehomme">Homme</label></p>
                        <p><input type="radio" name="rd_sexe" value="femme" id="rd_sexefemme" /> <label for="rd_sexefemme">Femme</label></p>
                    </fieldset>
                    <p><label for="num_verre">Nombre de verres bus :</label> <input type="number" name="num_verre" id="num_verre" min="0" max="25" value="0" /></p>
                </fieldset>
                <p id="controles"><input type="reset" name="rst_annuler" id="btn_annuler" value="Effacer les données"></p>
            </form>
        </section>
        <?php include('../includes/footer.html.inc.php'); ?>
    </body>
</html>
