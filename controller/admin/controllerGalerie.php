<?php
require_once(realpath(__DIR__ . '/../../view/admin/header_bo.php'));

function afficherGalerie()
{
    require_once(realpath(__DIR__ . '/../../model/admin/modelGalerie.php'));
    if (isset($_GET['mode'])) {
        switch ($_GET['mode']) {
            case 'delete':
                $resultatDelete = deleteMedia();
                if ($resultatDelete === 0) {
                    echo "<p>Une erreur est survenue lors de la suppression de l'image</p>";
                } else {
                    echo "<p>L'image a bien été supprimé</p>";
                }
                break;
        }
    }

    /** Traitement de l'upload du fichier **/
    if (isset($_FILES['document'])) {
        //variables de fichiers
        $dossier = "assets/img/";
        $fichier = strtolower(preg_replace('/([^.a-z0-9]+)/i', '', basename($_FILES['document']['name'])));
        //echo substr(strrchr($fichier,'.'),1);
        $tmp = $_FILES['document']['tmp_name'];
        //extensions
        $extensions_autorisees = array('jpg', 'jpeg', 'png', 'gif');
        $extension_du_fichier = substr(strrchr($fichier, '.'), 1);
        //taille maximum
        $taille_max = 1000000;
        $taille_fichier = $_FILES['document']['size'];
        //$taille_fichier = filesize($tmp);

        if ($taille_fichier < $taille_max) {
            if (in_array($extension_du_fichier, $extensions_autorisees)) {
                require_once(realpath(__DIR__ . '/../../class/connexion.php'));
                require_once(realpath(__DIR__ . '/../../config.php'));
                $connexion = new Connexion(NOM_BDD);
                $nb = $connexion->select("SELECT * FROM media WHERE name_media='" . $fichier . "'");
                if ($nb->rowCount() == 0) {
                    if (move_uploaded_file($tmp, $dossier . $fichier)) {
                        //SAUVEGARDE
                        $sql = "INSERT INTO media(url_media,name_media,extension_media) VALUES('" . LOCAL_URL . "/" . $dossier . $fichier . "','" . $fichier . "','" . $extension_du_fichier . "')";
                        if ($connexion->insert($sql) > 0) {
                            echo 'Fichier bien téléversé';
                        } else {
                            echo "Erreur lors de l'upload";
                        }
                    } else {
                        echo "Le fichier n'as pas pu être déplacé";
                    }
                } else {
                    echo "Fichier déjà présent sur le site";
                }
            } else {
                echo "Veuillez uploader un fichier .jpg, .jpeg, .gif ou .png seulement";
            }
        } else {
            echo "Le fichier doit être inferieur à " . $taille_max . " octets.";
        }
    }

    $resultatMedia = recupAllMedia();
    require_once(realpath(__DIR__ . '/../../view/admin/galerie/gestionGalerieView.php'));
}
