<?php
require_once(realpath(__DIR__ . '/../../view/admin/header_bo.php'));

function afficherGestionformation()
{
    require_once(realpath(__DIR__ . '/../../model/admin/modelFormation.php'));
    $resultatFormation = recupAllformation();
    require_once(realpath(__DIR__ . '/../../view/admin/formation/gestionFormationView.php'));
}

function afficherAjoutformation()
{
    require_once(realpath(__DIR__ . '/../../model/admin/modelGalerie.php'));
    $resultatImage = recupAllMedia();
    require_once(realpath(__DIR__ . '/../../view/admin/formation/ajoutFormationView.php'));
}

function afficherEditionformation()
{
    require_once(realpath(__DIR__ . '/../../model/admin/modelFormation.php'));
    require_once(realpath(__DIR__ . '/../../model/admin/modelGalerie.php'));
    $resultatImage = recupAllMedia();
    $resultatFormation = recupUneformation();
    require_once(realpath(__DIR__ . '/../../view/admin/formation/editFormationView.php'));
}

function afficherResultatformation()
{
    require_once(realpath(__DIR__ . '/../../model/admin/modelFormation.php'));
    switch ($_GET['mode']) {
        case 'ajout':
            $resultatAjout = ajoutFormation();
            if ($resultatAjout === 0) {
                echo "<p>Une erreur est survenu lors de l'ajout de la formation</p>";
                require_once(realpath(__DIR__ . '/../../view/admin/formation/ajoutFormationView.php'));
            } else {
                echo "<p>La formation a bien été ajouté</p>";
                $resultatFormation = recupAllformation();
                require_once(realpath(__DIR__ . '/../../view/admin/formation/gestionFormationView.php'));
            }
            break;
        case 'edition':
            $resultatEdition = editFormation();
            if ($resultatEdition === 0) {
                echo "<p>Une erreur est survenu lors de la modification</p>";
                $resultatFormation = recupUneformation();
                require_once(realpath(__DIR__ . '/../../view/admin/formation/editFormationView.php'));
            } else {
                echo "<p>La modification a bien été prise en compte</p>";
                require_once(realpath(__DIR__ . '/../../model/admin/modelGalerie.php'));
                $resultatImage = recupAllMedia();
                $resultatFormation = recupAllformation();
                require_once(realpath(__DIR__ . '/../../view/admin/formation/gestionFormationView.php'));
            }
            break;
        case 'delete':
            $resultatDelete = deleteFormation();
            if ($resultatDelete === 0) {
                echo "<p>Une erreur est survenu lors de la suppression</p>";
                $resultatFormation = recupAllformation();
                require_once(realpath(__DIR__ . '/../../view/admin/formation/gestionFormationView.php'));
            } else {
                echo "<p>La suppression a bien été effectué</p>";
                $resultatFormation = recupAllformation();
                require_once(realpath(__DIR__ . '/../../view/admin/formation/gestionFormationView.php'));
            }
            break;
    }
}
