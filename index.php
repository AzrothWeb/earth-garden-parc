<?php
    $getParams = isset($_GET) ? $_GET : null;
    $postParams = isset($_POST) ? $_POST : null;
    $params = [
        "get"  => $getParams,
        "post" => $postParams
    ];
    if (isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'login':
                require_once('./controller/site/controllerUtilisateur.php');
                login();
                break;
            case 'valeurs':
                require_once('./controller/site/controllerSite.php');
                afficherNosValeurs();
            break;
            case 'location' :
                require_once('./controller/site/controllerSite.php');
                afficherLocation();
            break;
            case 'espace-client' :
                require_once('./controller/site/controllerUtilisateur.php');
                afficherEspaceClient();
                break;
            case 'resultat-utilisateur' :
                require_once('./controller/site/controllerUtilisateur.php');
                resultatUtilisateur($postParams);
                break;
           case 'gestion-site':
                require_once('./controller/admin/controllerAdmin.php');
                afficherTableauDeBord();
            break;
            case 'gestion-user':
                require_once('./controller/admin/controllerUser.php');
                afficherGestionUser();
            break;
            case 'ajout-user':
                require_once('./controller/admin/controllerUser.php');
                afficherAjoutUser();
            break;
            case 'edit-user':
                require_once('./controller/admin/controllerUser.php');
                afficherEditUser();
            break;
            case 'resultat-user':
                require_once('./controller/admin/controllerUser.php');
                afficherResultatUser();
            break;
              case 'gestion-article': 
                require_once('./controller/admin/controllerArticle.php');
                afficherGestionArticle();
            break;
            case 'ajout-article':
                require_once('./controller/admin/controllerArticle.php');
                afficherAjoutArticle();
            break;
            case 'edition-article':
                require_once('./controller/admin/controllerArticle.php');
                afficherEditionArticle();
            break;
            case 'resultat-article':
                require_once('./controller/admin/controllerArticle.php');
                afficherResultatArticle();
            break;
            case 'gestion-location':
                require_once('./controller/admin/controllerLocation.php');
                afficherGestionLocation();
            break;
            case 'ajout-location':
                require_once('./controller/admin/controllerLocation.php');
                afficherAjoutLocation();
            break;
            case 'edition-location':
                require_once('./controller/admin/controllerLocation.php');
                afficherEditionLocation();
            break;
            case 'resultat-location':
                require_once('./controller/admin/controllerLocation.php');
                afficherResultatLocation();
            break;
            case 'gestion-formation':
                require_once('./controller/admin/controllerFormation.php');
                afficherGestionFormation();
            break;
            case 'ajout-formation':
                require_once('./controller/admin/controllerFormation.php');
                afficherAjoutFormation();
            break;
            case 'edition-formation':
                require_once('./controller/admin/controllerFormation.php');
                afficherEditionFormation();
            break;
            case 'resultat-formation':
                require_once('./controller/admin/controllerFormation.php');
                afficherResultatFormation();
            break;
            case 'gestion-page' : 
                require_once('./controller/admin/controllerPage.php');
                gestionPage();
                break;
            case 'editer-page' : 
                require_once('./controller/admin/controllerPage.php');
                editionPage($getParams);
                break;
            case 'resultat-page' :
                require_once('./controller/admin/controllerPage.php');
                resultatPage($postParams);
                break;
            case "afficher-page":
                require_once('./controller/site/controllerSite.php');
                //afficherPage($getParams);
            break;
            case "contact":
                require_once('./controller/site/controllerSite.php');
                afficherContact();
            break;
            case "debuter":
                require_once('./controller/site/controllerSite.php');
                afficherDebuter();
            break;
            case "dons":
                require_once('./controller/site/controllerSite.php');
                afficherDons();
            break;
            case "billeterie":
                require_once('./controller/site/controllerSite.php');
                afficherBilleterie();
            break;
            case "activites":
                require_once('./controller/site/controllerSite.php');
                afficherActivites();
            break;
            case "benevole":
                require_once('./controller/site/controllerSite.php');
                afficherBenevole();
            break;
            case "sidebar":
                require_once('./controller/site/controllerSite.php');
                afficherSidebar();
            break;
            case "zoo":
                require_once('./controller/site/controllerSite.php');
                afficherZoo();
            break;
            case "playful":
                require_once('./controller/site/controllerSite.php');
                afficherPlayful();
            break;
            case "garden":
                require_once('./controller/site/controllerSite.php');
                afficherGarden();
            break;
            case "accueil1":
                require_once('./controller/site/controllerAccueil.php');
                afficherAccueil1();
            break;
            case 'galerie':
                require_once('./controller/admin/controllerGalerie.php');
                afficherGalerie();
            break;
        }
    } else {
        require_once('./controller/site/controllerSite.php');
        afficherAccueil();
    }
