<div class="container text-center">
    <h1>Modification d'une formation</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
            <?php foreach ($resultatFormation as $resultFormation) { ?>
                <label for="titre">Titre de la Formation</label>
                <input type="text" id="titre" name="titre" placeholder="Titre" value="<?php echo $resultFormation->titre_article ?>" required>
                <label for="contenu">Contenu de la formation</label>
                <textarea name="contenu" id="contenu" cols="30" rows="22"><?php echo $resultFormation->contenu_article ?></textarea>
            </div>
            <div class="col-md-2">
                <label for="prix">Prix en €</label>
                <input type="number" name="prix" id="prix" value="<?php echo $resultFormation->prix_article ?>">
            </div>
        </div>
        <input type="hidden" name="id_article" value="<?php echo $resultFormation->id_article ?>">
        <input type="hidden" name="page" value="resultat-formation">
        <input type="hidden" name="mode" value="edition">
        <button class="btn btn-primary" type="submit">Ajouter</button>
            <?php } ?>
    </form>
<<<<<<< HEAD
=======
    <script type="text/javascript" >
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
		images_upload_url: '<?php echo LOCAL_URL?>/assets/tinymce/upload_img.php',
		images_upload_base_path: '<?php echo LOCAL_URL?>/assets/img/',
		convert_urls: false,
		images_upload_credentials: true
	});
</script>
>>>>>>> 972ce363b87f5dafc2d6fdae86af699b36099a56
</div>