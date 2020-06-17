<?php

require_once(realpath(__DIR__ . '/../../view/admin/header_bo.php'));

    function afficherGestionCategory(){
        require_once(realpath(__DIR__ . '/../../model/admin/modelCategory.php'));
        $resultatCategory = recupAllCategory();
        require_once(realpath(__DIR__ . '/../../view/admin/category/gestionCategoryView.php'));
    }
?>