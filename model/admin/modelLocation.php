<?php

function recupAllLocation()
{
    require_once(realpath(__DIR__ . '/../../class/connexion.php'));
    require_once(realpath(__DIR__ . '/../../config.php'));
    $connexion = new Connexion(NOM_BDD);
    $sqlLocation = "SELECT * FROM article WHERE id_type = 2";
        return $connexion->select($sqlLocation);
}
