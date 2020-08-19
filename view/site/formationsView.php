<link rel="stylesheet" href="<?php echo LOCAL_URL ?>/assets/css/styleFormation.css">
<script type="text/javascript" src="<?php echo LOCAL_URL ?>/assets/js/formation.js"></script>
<div class="container">
    <h1 class="text-center">Nos Formations</h1>
    <?php foreach ($allFormations as $resultFormation) { ?>
        <div class="row boxFormation" id="formation<?php echo $resultFormation->id_article ?>">
            <img class="col-md-4" src="<?php echo $resultFormation->url_media ?>" alt="<?php echo $resultFormation->name_media ?>"  width="50%">
            <div class="col-md-8 text-center">
                <span class="titreFormation text-center"><?php echo $resultFormation->titre_article ?></span>
                <br>
                <br>
                <p><?php echo substr($resultFormation->contenu_article, 0, 200) ?></p>
            </div>
            <br>
        </div>
        <div class="modal fade" id="modal-formation<?php echo $resultFormation->id_article ?>">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $resultFormation->titre_article ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $resultFormation->contenu_article ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>