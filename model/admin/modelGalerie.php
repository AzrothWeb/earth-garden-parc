<?php
    function recupAllMedia(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        $sqlmedia = "SELECT * FROM media";
        return $connexion->select($sqlmedia);
    }

    function deleteMedia(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        $sqlDelete = "DELETE FROM media WHERE id_media =" . $_GET['id_media'];
        $connexion->update_delete($sqlDelete);
    }
