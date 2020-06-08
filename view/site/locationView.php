<div class="row">
    <div class="col-12 text-center">
        <div class="container">
            <h1 class="text-center">Espace professionnnel</h1>
            <br><br><br>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="container">
        <?php
        $i = 1;
        foreach ($resultat as $res) {
            if ($i % 2) { ?>
                <div class="col-md-12" style=" border:none;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="text-center"><?php echo $res->titre_article; ?></h5>
                                <p class="text-center"><?php echo $res->contenu_article; ?></p>
                                <div class="text-center">
                                    <p>Prix : <?php echo $res->prix_article; ?>€</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 img-center">
                            <img src="<?php echo $res->url_media; ?>" alt="Location" title="location" style="width:90%;">
                        </div>
                    </div>
                </div>
                <br><br><br>
            <?php
            } else {
            ?>
                <div class="col-md-12" style=" border:none;">
                    <div class="row">
                        <div class="col-md-4 img-center">
                            <img src="<?php echo $res->url_media; ?>" alt="Location" title="location" style="width:90%;">
                        </div>
                        <div class="col-md-8" style="display:inline-block;">
                            <div class="card-body">
                                <h5 class="text-center"><?php echo $res->titre_article; ?></h5>
                                <p class="text-center"><?php echo $res->contenu_article; ?></p>
                                <div class="text-center">
                                    <p>Prix : <?php echo $res->prix_article; ?>€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
        <?php
            }
            $i++;
        }
        ?>
    </div>
</div>
<br><br><br>
<p class="text-center">Une de nos locations vous intéresse ? Pour réserver ou toutes autres informations, veuillez contacter <a href="index?page=contact">Le Régisseur</a></p>
</div>
<br><br><br>