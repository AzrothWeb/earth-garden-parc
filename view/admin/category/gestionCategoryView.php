<div class="container">
    <div class="row">
        <h1 class="text-center col-md-12">Gestionnaire de catégorie</h1>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAjout">Ajouter une Catégorie</button>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEdition<?php echo $result->id_category ?>"><i class='fas fa-edit'></i></button>
                        </td>
                        <td>
                            <form action="index" method="get">
                                <input type="hidden" name="mode" value="delete">
                                <input type="hidden" name="page" value="resultat-category">
                                <input type="hidden" name="id_category" value="<?php echo $result->id_category ?>">
                                <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Edition d'une categorie -->
                    <div class="modal fade" id="modalEdition<?php echo $result->id_category ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Édition d'une catégorie</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="index" method="get">
                                                <div class="form-group">
                                                    <label for="name">Nom de la catégorie : </label>
                                                    <input type="text" name="name" id="name" value="<?php echo $result->name_category ?>" required>
                                                </div>
                                                <input type="hidden" name="id_category" value="<?php echo $result->id_category ?>">
                                                <input type="hidden" name="mode" value="edition">
                                                <input type="hidden" name="page" value="resultat-category">
                                                <button class="btn btn-primary" type="submit">Ajouter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal d'ajout de catégorie  -->
    <div class="modal fade" id="modalAjout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                            <input type="text" name="name" id="name" required>
                        </div>
                        <input type="hidden" name="mode" value="ajout">
                        <input type="hidden" name="page" value="resultat-category">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>