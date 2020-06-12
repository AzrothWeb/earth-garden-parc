<div class="container">
    <?php foreach ($resultatActivite as $resAct) ?>
    <h1 class="text-center"><?php echo $resAct->titre_article ?></h1>
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <img class="card-img-top" src="<?php echo $resAct->url_media;?>" alt="<?php echo $resAct->name_media ?>" titre="<?php echo $resAct->name_media ?>" width="100%">
        </div>
        <div class="col-md-8">
            <br><br>
            <p><?php echo $resAct->contenu_article;?></p>
        </div>
    </div>
</div>
<br>