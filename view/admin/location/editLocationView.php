<div class="container text-center">
    <h1>Modification d'une location</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
                <?php foreach ($resultatLocation as $resultLocation) { ?>
                    <label for="titre">Titre de la location</label>
                    <input type="text" id="titre" name="titre" placeholder="Titre" value="<?php echo $resultLocation->titre_article ?>" required>
                    <label for="contenu">Contenu de la location</label>
                    <textarea name="contenu" id="contenu" cols="30" rows="22"><?php echo $resultLocation->contenu_article ?></textarea>
            </div>
            <div class="col-md-2">
                <label for="prix">Prix en €</label>
                <input type="number" name="prix" id="prix" value="<?php echo $resultLocation->prix_article ?>">
                <br>
                <br>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-xl">Associer une image</button>
                <div id="bodyImg"><input type="hidden" name="id_media" value="<?php echo $resultArticle->id_media ?>"></div>
            </div>
        </div>
        <input type="hidden" name="id_article" value="<?php echo $resultLocation->id_article ?>">
        <input type="hidden" name="page" value="resultat-location">
        <input type="hidden" name="mode" value="edition">
        <button class="btn btn-primary" type="submit">Ajouter</button>
    <?php } ?>
    </form>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Associer une image</h2>
                </div>
                <div class="modal-body">
                    <?php foreach ($resultatImage as $resImage) { ?>

                        <button class="btnImage" id="<?php echo $resImage->id_media ?>" data-dismiss="modal">
                            <img src="<?php echo $resImage->url_media ?>" alt="<?php echo $resImage->name_media ?>" title="<?php echo $resImage->name_media ?>" width="300px">
                        </button>

                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        tinymce.init({
            selector: '#contenu',
            language: 'fr_FR',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview",
            images_upload_url: '<?php echo LOCAL_URL ?>/assets/tinymce/upload_img.php',
            images_upload_base_path: '<?php echo LOCAL_URL ?>/assets/img/',
            convert_urls: false,
            images_upload_credentials: true
        });
    </script>
</div>