<?php
function recupAllFormation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    return $connexion->select("SELECT * FROM article WHERE id_type=3");
}

function recupUneFormation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlFormation = "SELECT * FROM article WHERE id_article =" . $_GET['id_article'];
    return $connexion->select($sqlFormation);
}

function ajoutFormation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlAjout = "INSERT INTO article(titre_article,contenu_article,prix_article,id_type) VALUES ( '" . $_GET['titre'] . "','" . $_GET['contenu'] . "'," . $_GET['prix'] . ",3)";
    return $connexion->insert($sqlAjout);
}

function editFormation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlEdit = "UPDATE article SET titre_article = '" . $_GET['titre'] . "', contenu_article = '" . $_GET['contenu'] . "', prix_article = '" . $_GET['prix'] . "' WHERE id_article = " . $_GET['id_article'];
    return $connexion->update_delete($sqlEdit);
}

function deleteFormation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlDelete = "DELETE FROM article WHERE id_article = " . $_GET['id_article'];
    return $connexion->update_delete($sqlDelete);
}
