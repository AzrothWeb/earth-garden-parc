<link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/styleact.css">
<!--Sidebar présente dans la page activiteView-->
<span>Catégories</span>
<br><br>
<div class="btn-group" role="group" aria-label="First group">
    <form method="GET" class="form-inline" action="<?php echo LOCAL_URL; ?>/index">
        <select class="form-control" name="id_category" id="selCat" required>
            <option value="" hidden disabled selected>Choisir</option>
            <?php foreach ($resultat as $result) { ?>
                <option value="<?php echo $result->id_category; ?>">
                    <?php echo $result->name_category; ?>
                </option>
            <?php } ?>
        </select>
        <div class="bouton">
        	<!--Rammene sur la page de resultatActivitesView-->
            <button id="btnCat" name="page" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtre"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>