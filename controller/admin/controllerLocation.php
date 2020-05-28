<?php
    require_once(realpath(__DIR__.'/../../view/admin/header_bo.php'));

    function afficherGestionLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelLocation.php'));
        $resultatLocation = recupAllLocation();
        require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
    }

    function afficherAjoutLocation(){
        require_once(realpath(__DIR__. '/../../view/admin/location/ajoutLocationView.php'));
    }

    function afficherResultatLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelLocation.php'));
        switch ($_GET['mode']){
            case 'ajout':
                $resultatAjout = ajoutLocation();
                if ($resultatAjout === 0){
                    echo "<p>Une erreur est survenu lors de l'ajout de la location</p>";
                    require_once(realpath(__DIR__. '/../../view/admin/location/ajoutLocationView.php'));
                } else {
                    echo "<p>La location a bien été ajouté</p>";
                    $resultatLocation = recupAllLocation();
                    require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
                }
            break;
        }
    }
?>