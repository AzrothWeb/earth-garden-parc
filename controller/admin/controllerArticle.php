<?php
    require_once(realpath(__DIR__.'/../../view/admin/header_bo.php'));

    function afficherGestionArticle(){
        require_once(realpath(__DIR__.'/../../model/admin/modelArticle.php'));
        $resultatArticle = recupAllArticles();
        require_once(realpath(__DIR__. '/../../view/admin/article/gestionArticleView.php'));
    }

    function afficherAjoutArticle(){
        require_once(realpath(__DIR__.'/../../model/admin/modelArticle.php'));
        require_once(realpath(__DIR__.'/../../model/admin/modelGalerie.php'));
        $resultatImage = recupAllMedia();
        $resultatCategory = recupCategory();
        require_once(realpath(__DIR__. '/../../view/admin/article/ajoutArticleView.php'));
    }

    function afficherEditionArticle(){
        require_once(realpath(__DIR__.'/../../model/admin/modelArticle.php'));
        require_once(realpath(__DIR__.'/../../model/admin/modelGalerie.php'));
        $resultatCategory = recupCategory();
        $resultatImage = recupAllMedia();
        $resultatArticle = recupUnArticle();
        require_once(realpath(__DIR__. '/../../view/admin/article/editArticleView.php'));
    }

    function afficherResultatArticle(){
        require_once(realpath(__DIR__.'/../../model/admin/modelArticle.php'));
        switch ($_GET['mode']) {
            case 'ajout':
                $resultatAjout = ajoutArticle();
                if ($resultatAjout === 0) {
                    echo "<p>Une erreur est survenu lors de l'ajout de l'article</p>";
                    require_once(realpath(__DIR__. '/../../view/admin/article/ajoutArticleView.php'));
                } else {
                    echo "<p>L'article a été ajouté</p>";
                    $resultatArticle = recupAllArticles();
                    require_once(realpath(__DIR__. '/../../view/admin/article/gestionArticleView.php'));
                }
            break;
            case 'edition':
                $resultatEdition = editionArticle();
                if ($resultatEdition === 0){
                    echo "<p>Une erreur est survenu lors de la modification de l'article</p>";
                    $resultatCategory = recupCategory();
                    $resultatArticle = recupUnArticle();
                    require_once(realpath(__DIR__. '/../../view/admin/article/editArticleView.php'));
                } else {
                    echo "L'article a été modifié";
                    $resultatArticle = recupAllArticles();
                    require_once(realpath(__DIR__. '/../../view/admin/article/gestionArticleView.php'));
                }
            break;
            case 'delete':
                $resultatDelete = deleteArticle();
                if ($resultatDelete === 0) {
                    echo "<p>Une erreur est survenu lors de la suppression de l'article</p>";
                    $resultatArticle = recupAllArticles();
                    require_once(realpath(__DIR__. '/../../view/admin/article/gestionArticleView.php'));
                } else {
                    echo "L'article a été supprimé";
                    $resultatArticle = recupAllArticles();
                    require_once(realpath(__DIR__. '/../../view/admin/article/gestionArticleView.php'));
                }
            break;
        }
    }
?>