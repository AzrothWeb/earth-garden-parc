<!--nouveau css pour pas foutre mes cards d'accueil en l'air-->
<link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/styleact.css">
<div class="text-center">
    <h1>Résultat Filtre</h1>
</div>
<br><br>
<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2">
        <?php require_once('sidebarView.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <?php
            foreach ($resultatActivites as $act) {
            ?>
                <div class="col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $act->url_media; ?>" alt="<?php echo $act->name_media ?>" width="200px" height="200px">
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $act->titre_article; ?></h4>
                            <div class="card-text">
                                <p><?php echo substr($act->contenu_article, 0, 200); ?></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-left"><?php echo $act->name_category; ?></span>
                            <form action="index" method="get">
                                <input type="hidden" name="id_article" value="<?php echo $act->id_article ?>">
                                <input type="hidden" name="page" value="activite">
                                <button class="btn btn-secondary float-right" type="submit">Voir Plus</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <br><br>