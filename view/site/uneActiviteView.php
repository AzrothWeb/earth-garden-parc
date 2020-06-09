<div class="container">
    <?php foreach ($resultatActivite as $resAct) ?>
    <h1 class="text-center"><?php echo $resAct->titre_article ?></h1>
    <img class="card-img-top" src="<?php echo $resAct->url_media;?>" alt="<?php echo $resAct->name_media ?>" titre="<?php echo $resAct->name_media ?>" width="100%">
    <br>
    <p><?php echo $resAct->contenu_article;?></p>

</div>
<br>
<br>