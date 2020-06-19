<?php
    function recupAllCategory(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM category");
    }
    
    function ajoutCategory(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->insert("INSERT INTO category(name_category) VALUES ('" . $_GET['name'] . "')");
    }

    function editCategory(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->update_delete("UPDATE category SET name_category = '" . $_GET['name'] . "' WHERE id_category =" . $_GET['id_category']);
    }

    function deleteCategory(){
        require_once(realpath(__DIR__ . '/../../class/connexion.php'));
        require_once(realpath(__DIR__ . '/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->update_delete("DELETE FROM category WHERE id_category =" . $_GET['id_category']);
    }