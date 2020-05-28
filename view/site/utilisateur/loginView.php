<?php
    if (ISSET($message)){
        echo '<h1 class="text-center">' . $titre . "</h1>";
        echo $message;
    } else { ?>
        <h1 class="h3 mb-3 font-weight-normal">Connection à l'espace professionel</h1>
        <form class="form-signin" action='<?php echo LOCAL_URL; ?>/index?page=resultat-utilisateur' method='POST'>
            <div class="form-group">
                <label for="inputPseudo" class="sr-only">Pseudo</label>
                <input type="text" id="inputPseudo" class="form-control" placeholder="Pseudo" name="pseudo" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword" class="sr-only">Mot de pass</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="password" required>
            </div>
            <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login">Connexion</button>
        </form> 
<?php } ?>