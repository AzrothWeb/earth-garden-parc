<div class="container text-center">
    <h1>Modification d'une formation</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
            <?php foreach ($resultatFormation as $resultFormation) { ?>
                <label for="titre">Titre de la Formation</label>
                <input type="text" id="titre" name="titre" placeholder="Titre" value="<?php echo $resultFormation->titre_article ?>" required>
                <label for="contenu">Contenu de la formation</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo $resultFormation->contenu_article ?></textarea>
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
</div>