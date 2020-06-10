<div class="container text-center">
    <h1>Édition d'un article</h1>
    <form action="index" method="get">
        <div class="row">
            <?php foreach ($resultatArticle as $resultArticle) { ?>
                <div class="col-md-10 boxCorps">
                    <label for="titre">Titre de l'article</label>
                    <input type="text" id="titre" name="titre" value="<?php echo $resultArticle->titre_article; ?>" required>
                    <label for="contenu">Contenu de l'article</label>
                    <textarea name="contenu" id="contenu" cols="30" rows="22"><?php echo $resultArticle->contenu_article ?></textarea>
                </div>
                <div class="col-md-2">
                    <label for="category">Catégories</label>
                    <select name="id_cat" id="category" required>
                        <option value="" selected hidden disabled>Choisir</option>
                        <?php foreach ($resultatCategory as $resultCat) { ?>
                            <option value="<?php echo $resultCat->id_category ?>" <?php if ($resultArticle->id_category === $resultCat->id_category) {
                                                                                        echo "selected";
                                                                                    } ?>><?php echo $resultCat->name_category ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-xl">Associer une image</button>
                    <div id="bodyImg"><input type="hidden" name="id_media" value="<?php echo $resultArticle->id_media ?>"></div>
                </div>
        </div>
        <input type="hidden" name="id_article" value="<?php echo $resultArticle->id_article ?>">
        <input type="hidden" name="page" value="resultat-article">
        <input type="hidden" name="mode" value="edition">
    <?php } ?>
    <button class="btn btn-primary" type="submit">Modifier</button>

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


    </form>
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