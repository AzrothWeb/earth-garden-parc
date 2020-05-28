<?php
    require_once(realpath(__DIR__. '/../../view/admin/header-admin.php'));
    require_once(realpath(__DIR__. '/../../model/modelPage.php'));
    
    function gestionPage(){
        if (($_SESSION['user']->get_id_role() ?? null) == 4){
            $resultat = touteLesPages();
            $id_role = $_SESSION['user']->get_id_role();
            require_once(realpath(__DIR__. '/../../view/admin/pages/gestionPageView.php'));
        } else {
            require_once(realpath(__DIR__. '/../../view/site/utilisateur/loginView.php'));
        }
    }

    function editionPage($GETPARAMS){
        $mode = isset( $GETPARAMS['mode'] ) ? $GETPARAMS['mode'] : null;
        $id_temp_selected = NULL;
        $resultat_template = tousLesTemplates();
        if ($mode == 'edition') {
            $id_gp = $GETPARAMS['id_gp'];
            $resultat = recupPage($id_gp);
            foreach ($resultat as $result){
                $titre_gp = $result->titre_gp;
                $content_gp = $result->content_gp;
                $id_temp_selected = $result->id_template; 
            }
            $titre = "Edition de la page";
        } else {
            $titre_gp = null;
            $content_gp = null;
            $titre = "Ajouter une nouvelle page";   
        }        
        require_once(realpath(__DIR__. '/../../view/admin/pages/editionPageView.php'));
    }

    function resultatPage($POSTPARAMS){
        if (isset($POSTPARAMS['submit'])) {
            switch ($POSTPARAMS['submit']){
                case "editer":
                    $titre = "Modification de la page";
                    $message= editerPage($POSTPARAMS['titre_gp'],$POSTPARAMS['content_gp'],$POSTPARAMS['id_template'],$POSTPARAMS['id_gp']);
                    require_once(realpath(__DIR__. '/../../view/resultatView.php'));
                    break;
                case "ajouter":
                    $titre = "Ajout d'une nouvelle page";
                    $message= ajouterPage($POSTPARAMS['titre_gp'],$POSTPARAMS['content_gp'],$POSTPARAMS['id_template']);
                    require_once(realpath(__DIR__. '/../../view/resultatView.php'));
                    break;
            }
        } else {
            $message_erreur = "Vous ne devriez pas être là, n'hesitez pas à contacter l'administrateur du site";
            
            require_once(realpath(__DIR__. '/../../view/erreur.php'));
        }
    }
