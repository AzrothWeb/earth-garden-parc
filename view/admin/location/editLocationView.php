<div class="container text-center">
    <h1>Modification d'une location</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
            <?php foreach ($resultatLocation as $resultLocation) { ?>
                <label for="titre">Titre de la location</label>
                <input type="text" id="titre" name="titre" placeholder="Titre" value="<?php echo $resultLocation->titre_article ?>" required>
                <label for="contenu">Contenu de la location</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo $resultLocation->contenu_article ?></textarea>
            </div>
            <div class="col-md-2">
                <label for="prix">Prix en €</label>
                <input type="number" name="prix" id="prix" value="<?php echo $resultLocation->prix_article ?>">
            </div>
        </div>
        <input type="hidden" name="page" value="resultat-location">
        <input type="hidden" name="mode" value="ajout">
        <button class="btn btn-primary" type="submit">Ajouter</button>
            <?php } ?>
    </form>
</div>