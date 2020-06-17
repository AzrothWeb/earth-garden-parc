<div class="container">
    <div class="row">
        <h1 class="text-center col-md-12">Gestionnaire de catégorie</h1>
        <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Ajouter une Catégorie</button>
        </div>
        <table class="bg-light text-center col-md-8">
            <thead>
                <th>Nom de la catégorie</th>
                <th>Éditer</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
                <?php foreach ($resultatCategory as $result) { ?>
                    <tr>
                        <td>
                            <p class="text-center"><?php echo $result->name_category ?></p>
                        </td>
                        <td>
                            <form action="index" method="get">
                                <input type="hidden" name="page" value="edition_category">
                                <input type="hidden" name="id_category" value="$result->id_category">
                                <button class="btn btn-success" type="submit" name="mode" value="edition"><i class='fas fa-edit'></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="index" method="get">
                                <input type="hidden" name="page" value="resultat_category">
                                <input type="hidden" name="id_category" value="$result->id_category">
                                <button class="btn btn-danger" type="submit" name="mode" value="delete"><i class='fas fa-trash-alt'></i></button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Ajout d'une catégorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index" method="get">
                        <div class="form-group">
                            <label for="name">Nom de la catégorie : </label>
                            <input type="text" name="name" id="name">
                        </div>
                        <button class="btn btn-primary" type="submit" name="page" value="resultat-category">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>