<?php
$tabLiens = array("Route" => "route.html", "Cross" => "cross.html", "Piste" => "piste.html", "Enfants" => "enfants.html", "Nous contacter" => "nous-contacter.html");
foreach ($tabLiens as $nom => $valeur) {
    echo '<li><a href="pages/', $valeur, '">', $nom, '</a></li>';
}