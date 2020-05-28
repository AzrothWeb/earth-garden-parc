<?php
    require_once(realpath(__DIR__.'/../../view/admin/header_bo.php'));

    function afficherGestionLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelLocation.php'));
        $resultatLocation = recupAllLocation();
        require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
    }
?>