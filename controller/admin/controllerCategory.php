<?php

require_once(realpath(__DIR__ . '/../../view/admin/header_bo.php'));

    function afficherGestionCategory(){
        require_once(realpath(__DIR__ . '/../../model/admin/modelCategory.php'));
        $resultatCategory = recupAllCategory();
        require_once(realpath(__DIR__ . '/../../view/admin/category/gestionCategoryView.php'));
    }


    function afficherResultatCategory(){
        require_once(realpath(__DIR__ . '/../../model/admin/modelCategory.php'));
        if (isset($_GET['mode'])){
            switch ($_GET['mode']){
                case 'ajout':
                    $resultatAjout = ajoutCategory();
                    if ($resultatAjout === 0){
                        echo 'une Erreur est survenu';
                    } else {
                        echo "L'ajout a bien été effectué";
                    }
                    $resultatCategory = recupAllCategory();
                    require_once(realpath(__DIR__ . '/../../view/admin/category/gestionCategoryView.php'));
                break;
                case 'edition':
                    $resultatEdition = editCategory();
                    if ($resultatEdition === 0){
                        echo 'une Erreur est survenu';
                    } else {
                        echo "La modification a bien été effectué";
                    }
                    $resultatCategory = recupAllCategory();
                    require_once(realpath(__DIR__ . '/../../view/admin/category/gestionCategoryView.php'));
                break;
                case 'delete':
                    $resultatDelete = deleteCategory();
                    if ($resultatDelete === 0){
                        echo 'une Erreur est survenu';
                    } else {
                        echo "La suppression a bien été effectué";
                    }
                    $resultatCategory = recupAllCategory();
                    require_once(realpath(__DIR__ . '/../../view/admin/category/gestionCategoryView.php'));
                break;
            }
        }
    }