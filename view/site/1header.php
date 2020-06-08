<!Doctype html>
<html>
    
    <head>
    <title>EARTH Garden Parc</title>
    <meta charset="utf-8">
    <?php
        require_once('./config.php');
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/bootstrap-custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/style.css">
    <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/anime.js"></script>
    <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/custom.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
    <?php
       require_once(realpath(__DIR__ . "../../../class/connexion.php")); 
       require_once(realpath(__DIR__ . "../../../class/user.php"));
       $connexion = new Connexion(NOM_BDD);
       
       session_start();
    ?>
    <body>
        <!-- <div class="container-lg"> -->
        <header>
        <div class="row">
            <nav id="nav"class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index?page=accueil"><img id="logo"src="./assets/img/Logo2.gif" alt="Logo Earth Garden Park" title="Logo Earth Garden Parc"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto listLink">
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Nos Valeurs
                             </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="index?page=valeurs">Notre Ambition</a>
                            <a class="nav-link" target="_blank" href="../assets/pdf/earthgardenparc.pdf">En savoir plus</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index?page=location">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index?page=activites">Activités</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="index?page=billeterie">Billeterie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index?page=debuter">Débuter</a>
                        </li> 
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Don
                             </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="index?page=dons">Faire un don</a>
                            <a class="nav-link" href="index?page=benevole">Devenir Bénévole</a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </header>
        <main>
        <div class="container-lg">
