<?php

    function recupAllArticles(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM article NATURAL JOIN category NATURAL JOIN media WHERE id_type=1");
    }
    function recupAllFormations(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM article NATURAL JOIN category WHERE id_type=3");
    }
    function recupNbArticles(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT COUNT(*) AS total FROM article NATURAL JOIN media WHERE id_type=1");
    }

    function recupCategory(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM category");
    }

    function ajoutArticle(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        $sqlAjout = "INSERT INTO article(titre_article,contenu_article,id_category,id_media,id_type) VALUES ('" . $_GET['titre'] . "', '" . $_GET['contenu'] . "', " . $_GET['id_cat'] . ", ". $_GET['id_media'] ." ,1)";
        return $connexion->insert($sqlAjout);
    }

    function recupUnArticle(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM article NATURAL JOIN category NATURAL JOIN media WHERE id_article=" . $_GET['id_article']);
    }

    function editionArticle(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        $sqlEdit ="UPDATE article SET titre_article = '" . $_GET['titre'] . "', contenu_article = '" . $_GET['contenu'] . "', id_category = " . $_GET['id_cat'] . ",id_media = ". $_GET['id_media'] ." WHERE id_article =" . $_GET['id_article'] ;
        return $connexion->update_delete($sqlEdit);
    }

    function deleteArticle(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        return $connexion->update_delete("DELETE FROM article WHERE id_article =" . $_GET['id_article']);
    }
?>