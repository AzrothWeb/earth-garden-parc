<!DOCTYPE html>
<html>




<?php
require_once(realpath(__DIR__ . '/../../config.php'));
require_once(realpath(dirname(__FILE__) . "/../../class/connexion.php"));
require_once(realpath(dirname(__FILE__) . "/../../class/user.php"));
$connexion = new Connexion(NOM_BDD);
session_start();
$session_id = session_id();
?>


<head>
    <title>Sidebar2</title>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/bootstrap-custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/style_bo.css">
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/js/custombo.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/js/associerImage.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL; ?>/assets/tinymce/tinymce.min.js"></script>
    <script src="https://kit.fontawesome.com/350d1dce07.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <a href="index">
                    <img src="./assets/img/logo1.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                </a>
                <div class="media-body">
                    <h4 class="m-0"><?php echo $_SESSION['user']->get_prenom() . " " . $_SESSION['user']->get_nom(); ?></h4>
                </div>
            </div>
        </div>
        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="index?page=gestion-site" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Tableau de bord
                </a>
            </li>
            <li class="nav-item">
                <a href="index?page=gestion-user" class="nav-link text-dark font-italic">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    Gestion des professionels
                </a>
            </li>
            <li class="nav-item">
                <a href="index?page=gestion-article" class="nav-link text-dark font-italic">
                <i class="far fa-newspaper mr-3 text-primary fa-fw"></i>
                    Gestion d'article
                </a>
            </li>
            <li class="nav-item">
                <a href="index?page=gestion-location" class="nav-link text-dark font-italic">
                <i class="fas fa-campground mr-3 text-primary fa-fw"></i>
                    Gestion de location
                </a>
            </li>
            <li class="nav-item">
                <a href="index?page=gestion-formation" class="nav-link text-dark font-italic">
                <i class="far fa-clipboard mr-3 text-primary fa-fw"></i>
                    Gestion de formation
                </a>
            </li>
            <li class="nav-item">
                <a href="index?page=galerie" class="nav-link text-dark font-italic">
                <i class="far fa-images mr-3 text-primary fa-fw"></i>
                    Galerie
                </a>
            </li>
        </ul>

    </div>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
            <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small>
        </button>