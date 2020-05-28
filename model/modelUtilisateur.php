<?php
    
    function seConnecter($pseudo, $password){
        require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
		require_once(realpath(dirname(__FILE__) . "/../class/user.php"));
        $connexion = new Connexion(NOM_BDD);
        $sql = "SELECT * FROM users WHERE pseudo_user = '" . $pseudo . "' AND pass_user = MD5('" . $password . "')";
        $res = $connexion->select($sql);
        if ($res->rowCount() > 0) {
            foreach ($res as $result) {
                $_SESSION['user'] = new User();
                $_SESSION['user']->remplir_depuis_bdd($result->id_user);
                return "Vous êtes bien connecté";
            }
        } else {
            return "Mot de passe ou nom d'utilisateur incorrect";
        }
    }

    function seDeconnecter(){
        if (ISSET($_SESSION["user"])){
            unset($_SESSION['user']);
            return "Vous êtes maintenant déconnecté";
        } else {
            return "Vous êtes déjà déconnecté";
        }
    }


    function modifPassword($pass1,$pass2,$id_user){
        if ($pass1 != $pass2) {
            return "Les mots de passe ne correspondent pas";
        } else {
            require_once(realpath(dirname(__FILE__) . "/../class/connexion.php")); 
            require_once(realpath(dirname(__FILE__) . "/../class/user.php"));
            $connexion = new Connexion(NOM_BDD);
            $nb = $connexion->update_delete("UPDATE users SET pass_user=MD5('" . $pass1 . "') WHERE id_user=" . $id_user);
            if ($nb != 0) {
                return "Votre mots de passe à bien été modifiée";
            } else {
                return "Erreur, contacter l'administrateur";
            }
        }
    }


    function nettoyer_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>