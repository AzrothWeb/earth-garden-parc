<div class="container text-center">
    <h1>Gestion des articles</h1>
    <table class="bg-light">
        <thead>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Catégorie</th>
            <th>Image</th>
            <th>Éditer</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <?php
            foreach ($resultatArticle as $result) { ?>
                <tr>
                    <td><?php echo $result->titre_article ?></td>
                    <td><?php echo substr($result->contenu_article, 0, 50)  ?></td>
                    <td><?php echo $result->name_category ?></td>
                    <td><img src="<?php echo $result->url_media ?>" alt="<?php $result->name_media ?>" width="100px"></td>
                    <td>
                        <form action="index" method="get">
                            <input type="hidden" name="id_article" value="<?php echo $result->id_article ?>">
                            <input type="hidden" name="page" value="edition-article">
                            <button class="btn btn-success" type="submit"><i class='fas fa-edit'></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="index" method="get">
                            <input type="hidden" name="page" value="resultat-article">
                            <input type="hidden" name="mode" value="delete">
                            <input type="hidden" name="id_article" value="<?php echo $result->id_article ?>">
                            <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="index?page=ajout-article">Ajouter un Article</a>
</div>