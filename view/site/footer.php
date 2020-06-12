</div>
</main>
    <footer>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/stylefooter.css">
        <div>
            <div class="row">
                <div class="col-lg-2 social-f text-center" style="font-size: 22px;">
                    <p>Suivez-Nous</p>
                    <ul>
                        <li class="facebook-icon-f"><a href="http://www.fb.com/earthgardenparc" target="_blank">Facebook</a></li>
                        <li class="instagram-icon-f"><a href="http://www.instagram.com/earthgardenparc" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-lg-7"></div>
                <div class="col-lg-3 text-center" style="font-size:20px;">
                    <a href="index?page=contact">Contact</a>
                    <p>Horaire d'ouverture :<br>10h-17h</p>
                </div>
            </div>
            <div class="text-center">
                <a href="https://www.helloasso.com/"><img src="./assets/img/partenaire1.png" alt="image_partenaire" title="helloasso" width="10%" style="align-items: center;"></a>
                <a href="https://www.onepercentfortheplanet.org/"> <img src="./assets/img/partenaire2.png" alt="image_partenaire" title="1%-for-the-planet" width="10%"></a>
                <a href="#"> <img src="./assets/img/partenaire3.png" alt="image_partenaire" title="tristan-ferre" width="5%"></a>
                <a href="https://entrepreneurs-animaliers.fr/"> <img src="./assets/img/partenaire4.gif" alt="image_partenaire" title="entrepreneurs-animaliers" width="10%"></a>
            </div>
            <div class="text-right">
                 <?php 
                    if (isset($_SESSION['user'])){?>
                        <a href="index.php?page=espace-client" class="connexion"><img src="./assets/img/connexionok.gif" alt="Connexion" title="Se Connecter" witdh="50px" height="50px"></a>
                <?php } else {
                        ?>
                        <a href="index.php?page=login" class="connexion"><img src="./assets/img/connexion.gif" alt="Connexion" title="Se Connecter" witdh="50px" height="50px"></a>
                <?php } ?>
            </div>
            <?php 
                    if (isset($_SESSION['user'])){ ?>
                        <div class="connexionMobile">
                            <a href="index.php?page=login">Accéder à l'espace personel</a>
                        </div>
                                <?php } else {
                        ?>
            <div class="connexionMobile">
                <a href="index.php?page=login">Connexion</a>
            </div>
                    <?php } ?>
            <div class="mention text-center">
                <p><a href="#">Mentions légales & Conditions générales de vente | Politique de confidentialité |</a> © Dorine Giustina et Quentin Perdoux</p> 
            </div>
        </div>
    </footer>
</body>
</html>