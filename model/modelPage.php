<?php

    function touteLesPages(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM gest_page ";
        return($connexion->select($sql));
    }

    function recupPage($id_gp){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM gest_page WHERE id_gp = " . $id_gp;
        return($connexion->select($sql));
    }

    function tousLesTemplates(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM template";
        return($connexion->select($sql));   
    }

    function ajouterPage($titre_gp, $content_gp){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "INSERT INTO gest_page(titre_gp, content_gp,id_template) VALUES('" . $titre_gp . "','" . addslashes($content_gp) . "', id_template =" . $id_template .")";
        $connexion->insert($sql);
        return "La page à été ajoutée";
    }

    function editerPage($titre_gp, $content_gp,$id_template, $id_gp){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "UPDATE gest_page SET titre_gp='" . $titre_gp . "', content_gp='" . $content_gp . "', id_template = ". $id_template." WHERE id_gp=" . $id_gp;
        $retour = $connexion->update_delete($sql);
        //Si $retour est different de zero alors
        if ($retour != 0){
            return "La page a été modifiée";
        //Sinon
        } else {
            return "La modification n'est pas faite.";
        }
    }

    function supprimerPage($id_gp){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "DELETE FROM gest_page WHERE id_gp=" .$id_gp;
        $retour = $connexion->update_delete($sql);
        //Si $retour est different de zero alors
        if ($retour != 0){
            return "La page a été supprimée";
        //Sinon
        } else {
            return "La suppression n'est pas faite.";
        }
    }
    function recupLocations(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article NATURAL JOIN media WHERE id_type= 2";
        return $connexion->select($sql);
    }
    function recupnbLocations(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT COUNT(*) as total FROM article WHERE id_type= 2";
        return $connexion->select($sql);
    }
    function recupBilleterie(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM billeterie";
        return $connexion->select($sql);
    }
    function recupActivites(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article NATURAL JOIN category NATURAL JOIN media WHERE id_type= 1";
        return $connexion->select($sql);
    }
    function recupUneActivite(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article NATURAL JOIN media WHERE id_article =" . $_GET['id_article'];
        return $connexion->select($sql);
    }
    function recupResultatFiltre(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article NATURAL JOIN media NATURAL JOIN category WHERE id_category = " . $_GET['id_category'];
        return $connexion->select($sql);
    }
    function recupDebuter(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article NATURAL JOIN media WHERE id_type= 3" ;
        return $connexion->select($sql);
    }
    function recupSidebar(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM category";
        return $connexion->select($sql);
    }
    function filtreCategory(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM article WHERE id_category=" . $_GET['id_category'];
        return $connexion->select($sql);
    }
    function recupCategory(){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select("SELECT * FROM category");
    }