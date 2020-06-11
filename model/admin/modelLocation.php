<?php

function recupAllLocation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlLocation = "SELECT * FROM article NATURAL JOIN media WHERE id_type = 2";
        return $connexion->select($sqlLocation);
}

function recupUneLocation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlLocation = "SELECT * FROM article NATURAL JOIN media WHERE id_article =" . $_GET['id_article'];
    return $connexion->select($sqlLocation);
}

function ajoutLocation(){
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlAjout = "INSERT INTO article(titre_article,contenu_article,prix_article,id_media,id_type) VALUES ( '". $_GET['titre'] . "','" . $_GET['contenu']. "'," . $_GET['prix'] . ",". $_GET['id_media'] .",2)";
    return $connexion->insert($sqlAjout);
}

function editLocation(){
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlEdit = "UPDATE article SET titre_article = '" . $_GET['titre'] . "', contenu_article = '" . $_GET['contenu']. "', prix_article = '" . $_GET['prix'] . "',id_media = ". $_GET['id_media'] ." WHERE id_article = " . $_GET['id_article'];
    return $connexion->update_delete($sqlEdit);
}

function deleteLocation(){
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlDelete = "DELETE FROM article WHERE id_article = " . $_GET['id_article'];
    return $connexion->update_delete($sqlDelete);
}