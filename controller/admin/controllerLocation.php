<?php
    require_once(realpath(__DIR__.'/../../view/admin/header_bo.php'));

    function afficherGestionLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelLocation.php'));
        $resultatLocation = recupAllLocation();
        require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
    }

    function afficherAjoutLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelGalerie.php'));
        $resultatImage = recupAllMedia();
        require_once(realpath(__DIR__. '/../../view/admin/location/ajoutLocationView.php'));
    }

    function afficherEditionLocation(){
        require_once(realpath(__DIR__.'/../../model/admin/modelLocation.php'));
        require_once(realpath(__DIR__.'/../../model/admin/modelGalerie.php'));
        $resultatImage = recupAllMedia();
        $resultatLocation = recupUneLocation();
        require_once(realpath(__DIR__. '/../../view/admin/location/editLocationView.php'));

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
            case 'edition':
                $resultatEdition = editLocation();
                if ($resultatEdition === 0){
                    echo "<p>Une erreur est survenu lors de la modification</p>";
                    $resultatLocation = recupUneLocation();
                    require_once(realpath(__DIR__. '/../../view/admin/location/editLocationView.php'));
                } else {
                    echo "<p>La modification a bien été prise en compte</p>";
                    $resultatLocation = recupAllLocation();
                    require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));

                }
            break;
            case 'delete':
                $resultatDelete = deleteLocation();
                if ($resultatDelete === 0){
                    echo "<p>Une erreur est survenu lors de la suppression</p>";
                    $resultatLocation = recupAllLocation();
                    require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
                } else {
                    echo "<p>La suppression a bien été effectué</p>";
                    $resultatLocation = recupAllLocation();
                    require_once(realpath(__DIR__. '/../../view/admin/location/gestionLocationView.php'));
                }
            break;
        }
    }
?>