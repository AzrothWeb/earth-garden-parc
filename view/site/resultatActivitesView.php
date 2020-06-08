<!--nouveau css pour pas foutre mes cards d'accueil en l'air-->
<link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/styleact.css">
<div class="text-center">
    <h1>Nos Activités</h1>
</div>
<br><br>
<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2">
    <?php require_once('sidebarView.php');?>
    <img src="<?php echo LOCAL_URL;?>/assets/img/decor5.gif" alt="insect" title="insect" class="insect" width="80%">
    </div>
</div>
<div class="row">
    <?php 
    foreach($resultatActivites as $act){
        ?>
    <div class="col-sm-6 col-md-5 col-lg-3 mt-4">
        <div class="card">
            <img class="card-img-top" src="https://picsum.photos/200/150/?random">
        <div class="card-block">
            <h4 class="card-title"><?php echo $act->titre_article;?></h4>
                <div class="card-text">
                      <?php echo $act->contenu_article;?>
                </div>
        </div>
            <div class="card-footer">
                <span class="float-left"><?php echo $act->name_category;?></span>
                <button class="btn btn-secondary float-right btn-sm">En savoir plus</button>
            </div>
        </div>
    </div>
</div>
<?php }
?>  
<br><br>