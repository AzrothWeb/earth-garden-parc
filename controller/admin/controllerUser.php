<?php
        require_once(realpath(__DIR__.'/../../view/admin/header_bo.php'));

    function afficherGestionUser(){
        require_once(realpath(__DIR__.'/../../model/admin/modelUser.php'));
        $resultat = recupUsers();
        require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
    }

    function afficherAjoutUser(){
        require_once(realpath(__DIR__.'/../../model/admin/modelUser.php'));
        $resultatRole = recupRoles();
        require_once(realpath(__DIR__.'/../../view/admin/user/ajoutUserView.php'));
    }

    function afficherResultatUser(){
        require_once(realpath(__DIR__.'/../../model/admin/modelUser.php')); 
        switch ($_GET['mode']) {
            case 'ajout':
                $resultatAjout = ajoutUser();
                if ($resultatAjout > 0) {
                    echo "<p>L'utilisateur a bien été ajouté</p>";
                    $resultat = recupUsers();
                    require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
                } else {
                    echo "<p>Une erreur est survenu lors de l'ajout de l'utilisateur veuillez réessayer</p>";
                    require_once(realpath(__DIR__.'/../../view/admin/user/ajoutUserView.php'));
                }
            break;
            case 'edit':
                if ($_GET['mdp1'] === ''){
                    $resultatEdit = editUserSansPass();
                    if ($resultatEdit === 0) {
                        echo "<p>Une erreur est survenu lors de la modification de votre utilisateur</p>";
                        $resultatUser = recupUnUser();
                        $resultatRole = recupRoles();
                        require_once(realpath(__DIR__.'/../../view/admin/user/editUserView.php'));
                    } else {
                        echo "<p>La modification de votre utilisateur a bien été prise en compte </p>";
                        $resultat = recupUsers();
                        require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
                    }
                } else {
                    $resultatEdit = editUserAvecPass();
                    if ($resultatEdit === 0) {
                        echo "<p>Une erreur est survenu lors de la modification de votre utilisateur</p>";
                        $resultatUser = recupUnUser();
                        $resultatRole = recupRoles();
                        require_once(realpath(__DIR__.'/../../view/admin/user/editUserView.php'));
                    } else {
                        echo "<p>La modification de votre utilisateur a bien été prise en compte </p>";
                        $resultat = recupUsers();
                        require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
                    }
                }
            break;
            case 'delete':
                $resultatDelete = deleteUser();
                if ($resultatDelete === 0){
                    echo "<p>Une erreur est survenu lors de la suppression de l'utilisateur</p>";
                    $resultat = recupUsers();
                    require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
                } else {
                    echo "<p>L'utilisateur a bien été supprimé</p>";
                    $resultat = recupUsers();
                    require_once(realpath(__DIR__.'/../../view/admin/user/gestionUserView.php'));
                }
            break;
        }   
    }

    function afficherEditUser(){
        require_once(realpath(__DIR__.'/../../model/admin/modelUser.php'));
        $resultatUser = recupUnUser();
        $resultatRole = recupRoles();
        require_once(realpath(__DIR__.'/../../view/admin/user/editUserView.php'));
    }
?>