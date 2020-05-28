<div class="container text-center">
    <h1 class="text-center">Modification d'un utilisateur</h1>
    <form action="index" method="get">
        <div class="boxForm">
            <?php foreach ($resultatUser as $resUser) { ?>
            <fieldset class="form-group">
                <div class="form-row">
                    <label for="nom">Nom : </label>
                    <input type="text" id="nom" name="nom" value="<?php echo $resUser->name_user ?>" selected>
                </div>
                <div class="form-row">
                    <label for="prenom">Prénom : </label>
                    <input type="text" id="prenom" name="prenom" value="<?php echo $resUser->firstname_user ?>" selected>
                </div>
                <div class="form-row">
                    <label for="role">Role : </label>
                    <select name="id_role" id="role" selected>
                        <option value="" selected hidden disabled>Choisir</option>
                        <?php
                        foreach ($resultatRole as $result) { ?>
                            <option value="<?php echo $result->id_role ?>" <?php if ($resUser->id_role === $result->id_role){echo "selected" ;} ?>><?php echo $result->name_role ?></option>
                        <?php } ?>
                    </select>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="form-row">
                    <label for="pseudo">Pseudo : </label>
                    <input type="text" id="pseudo" name="pseudo" value="<?php echo $resUser->pseudo_user ?>" selected>
                </div>
                <div class="form-row">
                    <label for="mdp1">Mot de Passe : </label>
                    <input type="password" name="mdp1" id="mdp1">
                </div>
                <div class="form-row">
                    <label for="mdp2">Confirmation : </label>
                    <input type="password" name="mdp2" id="mdp2">
                </div>
            </fieldset>
                        <?php } ?>
        </div>
        <input type="hidden" name="mode" value="edit">
        <input type="hidden" name="id_user" value="<?php echo $_GET['id_user'] ?>">
        <button class="btn btn-primary" id="btnSubmit" type="submit" name="page" value="resultat-user">Modifier</button>
    </form>

</div>