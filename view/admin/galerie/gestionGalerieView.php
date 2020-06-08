<div class="container">
    <h1 class="text-center">Galerie de média</h1>
    <form action="index?page=galerie" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="page" value="galerie">
        <input type="file" name="document">
        <input class="btn btn-secondary" type="submit" name="upload" value="Envoyer le fichier">
    </form>
    <div class="row">
        <?php
        foreach ($resultatMedia as $res) { ?>
            <div class="col-md-4">
                <img src="<?php echo $res->url_media ?>" alt="<?php echo $res->name_media ?>" title="<?php echo $res->name_media ?>" width="300px">
                <form action="index" method="get">
                    <input type="hidden" name="page" value="galerie">
                    <input type="hidden" name="id_media" value="<?php echo $res->id_media ?>">
                    <input type="hidden" name="mode" value="delete">
                    <button class="btn btn-danger btnSupp" type="submit"><i class='fas fa-trash-alt'></i></button>
                </form>
                <p class="text-center"><?php echo $res->id_media ?></p>
            </div>
        <?php } ?>
    </div>
</div>