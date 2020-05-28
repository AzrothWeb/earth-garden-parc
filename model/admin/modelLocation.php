<?php

function recupAllLocation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlLocation = "SELECT * FROM article WHERE id_type = 2";
        return $connexion->select($sqlLocation);
}

function ajoutLocation(){
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlAjout = "INSERT INTO article(titre_article,contenu_article,prix_article,id_type) VALUES ( '". $_GET['titre'] . "','" . $_GET['contenu']. "'," . $_GET['prix'] . ",2)";
    return $connexion->insert($sqlAjout);
}
