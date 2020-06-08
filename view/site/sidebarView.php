<link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/styleact.css">

	<!-- <form class="form-inline my-2 my-lg-0">
        <div class="row">
            <div class="col-md-9"> 
                <span>Recherche</span>
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="recherche">
            </div>
            <div class="col-md-3">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Valider</button>
            </div>
        </div> 
    </form> -->
        <span>Catégories</span>
        <br><br>
    <form method="GET" class="form-inline" action="<?php echo LOCAL_URL;?>/index">
        <select class="form-control" name="id_category" required>
        <?php foreach ($resultat as $result){?>
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