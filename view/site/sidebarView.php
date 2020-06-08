<link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL; ?>/assets/css/styleact.css">
<span>Catégories</span>
<br><br>
<form method="GET" class="form-inline" action="<?php echo LOCAL_URL; ?>/index">
    <select class="form-control" name="id_category" required>
        <?php foreach ($resultat as $result) { ?>
            <option value="<?php echo $result->id_category; ?>">
                <?php echo $result->name_category; ?>
            </option>
        <?php } ?>
    </select>
    <div class="bouton">
        <div id="button">
            <button name="page" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="filtre">Valider</button>
        </div>
    </div>
</form>
</div>