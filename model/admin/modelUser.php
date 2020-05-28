<?php
    function recupUsers(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sql =  "SELECT * FROM users NATURAL JOIN role";
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select($sql);
    }

    function recupUnUser(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sql =  "SELECT * FROM users NATURAL JOIN role WHERE id_user = " . $_GET['id_user'];
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select($sql);
    }

    function ajoutUser(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sqlAjout = "INSERT INTO users(name_user,firstname_user,pseudo_user,pass_user,id_role) VALUES ('" . $_GET['nom'] . "','" . $_GET['prenom'] . "','" . $_GET['pseudo'] . "',MD5('" . $_GET['mdp1'] . "'),". $_GET['id_role'] .")";
        $connexion = new Connexion(NOM_BDD);
        return $connexion->insert($sqlAjout);
    }

    function editUserAvecPass(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sqlEdit="UPDATE users SET name_user= '" . $_GET['nom'] . "', firstname_user = '" . $_GET['prenom'] . "', pseudo_user='" . $_GET['pseudo'] . "', pass_user=MD5('". $_GET['mdp1'] . "'), id_role  = " . $_GET['id_role'] . " WHERE id_user = " . $_GET['id_user'];
        $connexion = new Connexion(NOM_BDD);
        return $connexion->update_delete($sqlEdit);
    }

    function editUserSansPass(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sqlEdit="UPDATE users SET name_user= '" . $_GET['nom'] . "', firstname_user = '" . $_GET['prenom'] . "', pseudo_user='" . $_GET['pseudo'] . "', id_role  = " . $_GET['id_role'] . " WHERE id_user = " . $_GET['id_user'];
        $connexion = new Connexion(NOM_BDD);
        return $connexion->update_delete($sqlEdit);
    }

    function deleteUser(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $connexion = new Connexion(NOM_BDD);
        $sqlDelete="DELETE FROM users WHERE id_user =" . $_GET['id_user'];
        return $connexion->update_delete($sqlDelete);
    }

    function recupRoles(){
        require_once(realpath(__DIR__.'/../../class/connexion.php'));
        require_once(realpath(__DIR__.'/../../config.php'));
        $sql = "SELECT * FROM role";
        $connexion = new Connexion(NOM_BDD);
        return $connexion->select($sql);
    }
?>