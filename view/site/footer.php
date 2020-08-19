</div>
</main>
    <footer>
    <link rel="stylesheet" type="text/css" href="<?php echo LOCAL_URL;?>/assets/css/stylefooter.css">
        <div>
 <!--Les réseaux sociaux (voir à régler si il y en a plus à implanter) -->
            <div class="row">
                <div class="col-lg-2 social-f text-center" style="font-size: 22px;">
                    <p>Suivez-Nous</p>
                    <ul>
                        <li class="facebook-icon-f"><a href="https://www.facebook.com/Earth-Garden-Parc-104413597954601" target="_blank">Facebook</a></li>
                        <li class="instagram-icon-f"><a href="https://www.instagram.com/earthgardenparc/?hl=fr" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-lg-7"></div>
                <div class="col-lg-3 text-center" style="font-size:20px;">
                    <a href="index?page=contact">Contact</a>
                    <p>Horaires d'ouverture :<br>10h-17h</p>
                </div>
            </div>
            <!--Implantation des logos partenaires et liens-->
            <div class="text-center">
                <a href="https://www.helloasso.com/associations/earth-garden-parc/formulaires/1" target="_blank"><img src="./assets/img/partenaire1.png" alt="image_partenaire" title="helloasso" width="200px" style="align-items: center;"></a>
                <a href="https://directories.onepercentfortheplanet.org/nonprofit-partners/earth-garden-parc" target="_blank"> <img src="./assets/img/partenaire2.png" alt="image_partenaire" title="1%-for-the-planet" width="200px"></a>
                <a href="https://tristan-ferre.fr" target="_blank"> <img src="./assets/img/partenaire3.png" alt="image_partenaire" title="tristan-ferre" width="125px"></a>
                <a href="https://entrepreneurs-animaliers.fr/" target="_blank"> <img src="./assets/img/partenaire4.gif" alt="image_partenaire" title="entrepreneurs-animaliers" width="200px"></a>
            </div>
            <!--Connexion des professionnels ou Yves-->
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
            </div>
                    <?php } ?>
            <div class="mention text-center">
                <p><a href="index?page=legale">Mentions légales & Politique de confidentialité</a> 
                	<!--A décommanter quand la les conditions générales seront faites puis transféré dans le dossier PDF voir avec Yves ou Tristan-->
                	<!--| <a href="./pdf/X.pdf">Conditions générales de vente<a> -->
                	| © Dorine Giustina & Quentin Perdoux</p> 
            </div>
        </div>
    </footer>
</body>
</html>