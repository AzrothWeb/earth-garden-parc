<?php
    require_once(realpath(__DIR__.'/../../view/site/header.php'));

    function afficherAccueil(){
        require_once(realpath(__DIR__.'/../../view/site/indexView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }

    function afficherNosValeurs(){
        require_once(realpath(__DIR__.'/../../view/site/valeursView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherLocation(){
        require_once(realpath(__DIR__.'/../../model/modelPage.php'));
        $resultat=recupLocations();
        if ($resultat->total === 0){
            require_once(realpath(__DIR__.'/../../view/site/0locationView.php'));
        } else {
            require_once(realpath(__DIR__.'/../../view/site/locationView.php'));
        }
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherContact(){
        require_once(realpath(__DIR__.'/../../view/site/contactView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherDons(){
        require_once(realpath(__DIR__.'/../../view/site/donsView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherActivites(){
        require_once(realpath(__DIR__.'/../../view/site/activitesView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherDebuter(){
        require_once(realpath(__DIR__.'/../../view/site/debuterView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherBenevole(){
        require_once(realpath(__DIR__.'/../../view/site/benevoleView.php'));
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
    function afficherBilleterie(){
        require_once(realpath(__DIR__.'/../../model/modelPage.php'));
        $res=recupBilleterie();
        if($res === 0){
        require_once(realpath(__DIR__.'/../../view/site/0billeterieView.php'));
        } else{
        require_once(realpath(__DIR__.'/../../view/site/billeterieView.php'));
         }
        require_once(realpath(__DIR__.'/../../view/site/footer.php'));
    }
?>