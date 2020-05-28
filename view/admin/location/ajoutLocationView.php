<div class="container text-center">
    <h1>Ajout d'une location</h1>
    <form action="index" method="get">
        <div class="row">
            <div class="col-md-10 boxCorps">
                <label for="titre">Titre de la location</label>
                <input type="text" id="titre" name="titre" placeholder="Titre" required>
                <label for="contenu">Contenu de la location</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-2">
                <label for="prix">Prix en €</label>
                <input type="number" name="prix" id="prix">
            </div>
        </div>
        <input type="hidden" name="page" value="resultat-location">
        <input type="hidden" name="mode" value="ajout">
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
</div>