<?php
     require_once('./config.php');
    function afficherAccueil1(){
        require_once(realpath(__DIR__.'/../../view/site/index1View.php'));
    }

    function afficherPageAccueil(){
        require_once(realpath(__DIR__.'/../../view/site/header.php'));
        require_once(realpath(__DIR__.'/../../view/site/index1View.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    ?>