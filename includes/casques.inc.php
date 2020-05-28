<?php

// Connexion à la base de données nolark
$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');

// Requête pour récupérer les casques
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .=             ' INNER JOIN marque ON casque.marque=marque.id';
$req .= ' WHERE libelle="' . substr($pageActuelle, 0, -4) . '"';

// Transmission de la requête au serveur
$res = $cnx->query($req);

// Parcours du résultat et affichage des images
echo '<section id="casques">';

while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image, '" alt="', $ligne->modele, '">';
    
    // Si le stock est à -1, c'est sur commande et stockko
    if ($ligne->stock === -1) {
        echo "\t\t", '<p class="stockko"><abbr data-tip="Sur commande uniquement">stock</abbr></p>';
    } elseif ($ligne->stock >= 10) {
        echo "\t\t", '<p class="stockok"><abbr data-tip="', $ligne->stock, ' casques en stock">stock</abbr></p>';
    } else {
        echo "\t\t", '<p class="stockok"><abbr data-tip="Plus que ', $ligne->stock, ' casques en stock...">stock</abbr></p>';
    }
    echo "\t\t", '<p class="prix">', $ligne->prix, '€</p>', "\n";
    echo "\t\t", '<p class="marque">', $ligne->nom, '</p>', "\n";
    echo "\t\t", '<p class="modele">', $ligne->modele, '</p>', "\n";
    
    // Si la note est de 5, il faut ajouter un 0 pour correspondre au selecteur CSS
    if ($ligne->classement === 5) {
        echo "\t\t", '<img class="classement classement0', $ligne->classement, '" src="../images/casques/etoiles.gif" alt="Classement ',str_replace('.',',',$ligne->classement/10),' sur 5">', "\n";
    } else {
        echo "\t\t", '<img class="classement classement', $ligne->classement, '" src="../images/casques/etoiles.gif" alt="Classement ',str_replace('.',',',$ligne->classement/10),' sur 5">', "\n";
    }
    
    echo '</article>';
}
echo '<section id="casques">';