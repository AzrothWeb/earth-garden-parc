<div class="container text-center">
    <h1>Ajout d'un article</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
                <label for="titre">Titre de l'article</label>
                <input type="text" id="titre" name="titre" placeholder="Titre" required>
                <label for="contenu">Contenu de l'article</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-2">
                <label for="category">Catégories</label>
                <select name="id_cat" id="category" required>
                <option value="" selected hidden disabled>Choisir</option>
                <?php foreach ($resultatCategory as $resultCat) {?>
                    <option value="<?php echo $resultCat->id_category ?>"><?php echo $resultCat->name_category ?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <input type="hidden" name="page" value="resultat-article">
        <input type="hidden" name="mode" value="ajout">
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
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
		toolbar1: "undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | preview"
	});
</script>
</div>