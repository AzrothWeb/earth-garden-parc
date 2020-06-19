<div class="container">
    <h3 class="text-center">Contact</h3><br>

    <?php
    if(isset($_POST['contenu'])){
        $entete = "Mail de " . $_POST['fistname'] . ' ' . $_POST['name'] . "pouvant être répondu a l'adresse mail : " . $_POST['email'];
        $message = $_POST['contenu'];
        $resultatMail = mail('regisseur@earth-garden-parc.org',$_POST['sujet'],$message);
        if ($resultatMail === 0){
            echo "<p class='text-center'>Le mail n'a été envoyé</p>";
        } else {
            echo "<p class='text-center'>Le mail a bien été envoyer</p>";
        }}
    ?>
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <label for="name">*Nom : </label>
                <input class="form-control" id="name" name="name" required><br>
                <label for="firstname">*Prénom : </label>
                <input class="form-control" type="text" name="firstname" id="firstname">
                <label for="email">*Adresse Mail :</label>
                <input class="form-control" id="email" name="email" required><br>
                <label for="phone">Téléphone :</label>
                <input class="form-control" id="phone" name="phone"><br>
                <label for="object">*Sujet : </label>
                <input class="form-control" type="text" name="sujet" id="object">
                <label for="contenu">*Message</label>
                <textarea class="form-control" id="contenu" name="contenu" placeholder="Message" style="height:150px;" required></textarea>
                <span id="annotation">Les champs avec des * doivent obligatoirement être remplis afin d'envoyer le mails</span>
                <input type="hidden" name="test">
                <input class="btn btn-primary" id="btnEnvoyerMail" type="submit" value="Envoyer"><br><br>
            </form>
        
        </div>
        <div class="col-md-4">
            <span><b>Le Régisseur</b></span><br>
            Téléphone: 07 64 47 28 03<br>
            <a href="mailto:regisseur.earthgasdenparc@outlook.fr">E-mail</a><br>
            <br><br>
            <span><b>Earth Garden Parc</b></span><br>
        </div>
    </div>
</div>
