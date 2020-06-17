<?php
    function recupAllCategory(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM category");
    }
?>