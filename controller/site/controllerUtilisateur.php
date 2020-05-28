<?php
    require_once(realpath(__DIR__. '/../../view/site/header.php'));
    require_once(realpath(__DIR__. '/../../model/modelUtilisateur.php'));

    function login($exit = null){
        if (ISSET($_GET['exit'])){
            $titre = "Deconnexion";
            $message = seDeconnecter();
        }
        if (ISSET($_SESSION['user'])){
            $titre = "Vous êtes déjà connecté sous le pseudo " . $_SESSION['user']->get_pseudo();
            $message = '<a href="' .  LOCAL_URL . '/index?page=login&exit=oui">Se deconnecter</a>';
        }
        require_once(realpath(__DIR__. '/../../view/site/utilisateur/loginView.php'));
    }

    function resultatUtilisateur($POSTPARAMS){
        if (isset($POSTPARAMS['submit'])) {
            switch ($POSTPARAMS['submit']){
                case "login":
                    seConnecter($POSTPARAMS['pseudo'],$POSTPARAMS['password']);
                    require_once(realpath(__DIR__. '/../../view/site/utilisateur/espaceClientView.php'));
                    break;
            }   
        } else {
            $message_erreur = "Vous ne devriez pas être là, n'hesitez pas à contacter l'administrateur du site";
            
            require_once(realpath(__DIR__. '/../../view/erreur.php'));
        }

    }

    function afficherEspaceClient(){
        if (isset($_SESSION['user'])){
            require_once(realpath(__DIR__.'/../../view/site/utilisateur/espaceClientView.php'));
        } else {
            $message_erreur = "Vous n'êtes pas connecté";

            require_once(realpath(__DIR__. '/../../view/erreur.php'));
            }   
    }

?>