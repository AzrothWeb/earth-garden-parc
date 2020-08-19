<!Doctype html>
<html>
    <head>
        <title>EARTH Garden Parc</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once('./config.php');
    ?>       
        <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/bootstrap-custom.css">
        <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/style.css">
        <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/anime.js"></script>
        <script type="text/javascript" src="<?php echo LOCAL_URL;?>/assets/js/custom.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170460268-1"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
    <?php
       require_once("./class/connexion.php"); 
       require_once("./class/user.php");
       $connexion = new Connexion(NOM_BDD);
       session_start();
    ?>
    <body>
        <header>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/styleheader.css"> 
<div class="navigation-wrap bg-light start-header start-style">
        <div class="row">
            <div class="col-12">   	
                <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="index?page=accueil" alt=""><img class="logo"src="<?php echo LOCAL_URL;?>/assets/img/Logo2.gif" title="logo" alt="logo"></a>
                    <!--Nav bar en format mobile-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div style="flex-wrap:wrap" class="collapse navbar-collapse dropdown" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-3 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link"  href="index?page=accueil" aria-haspopup="true" aria-expanded="false">Accueil</a>
                            </li> 
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index?page=valeurs">Nos Valeurs</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index?page=location">Location</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index?page=activites">Actualités</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index?page=billeterie">Billetterie</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="index?page=debuter">Entreprendre</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Soutenir</a>
                                <div class="dropdown-menu active">
                                    <br>
                                    <a class="dropdown-item" href="index?page=dons">Faire un Don</a>
                                    <br>
                                    <a class="dropdown-item" href="index?page=benevole">Devenir Bénévole</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </nav>		
            </div>
        </div>
        </header>
        <!--Fin de la div ligne 31-->
</div>
<main>
    
 