<!--Image en format mobile-->
    <div id="imagestop">
    	<img class="imgstop" src='<?php echo LOCAL_URL;?>/assets/img/herbe.jpg' alt="jeunepousse" tilte="jeunepousse "width="100%" height="100%">
    </div>
    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('./assets/img/children.jpg')">
        </div>
        <div class="carousel-item " style="background-image: url('./assets/img/permaculture.jpg')">
        </div>
        <div class="carousel-item " style="background-image: url('./assets/img/herbe.jpg')">
        </div>
    </div>
    <!--Bouton du carousel-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
         </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
<div class="citation text-center">
    <p id="citation">« Il vient un temps où protester ne suffit plus, après la philosophie, il faut agir,<br>
    car la plus petite des actions vaudra toujours plus que la plus grande des intentions:<br>
    il est le plus souvent préférable de regretter d’avoir accompli une action, quitte à en tirer une leçon,<br>
    plutôt que de regretter de ne pas l’avoir entreprise ».<br>« Le Bon sens »</p>
</div>
<!--CART PARTY FIESTA! le réglages est sensible ne pas toucher au css-->
<!--On remonte permet de mieux gérer l'espacement en fonction des formats-->
<div class="onremonte"></div>
<div class="container-lg">
    <br>
    <div class="bg-logo">
        <h2 class="text-center">Nos Activités</h2>
        <br><br>
        <section id="team" class="pb-5"> 
            <div class="row"> 
                    <!-- Zoo-Terre Hapy card -->
                <div class="col-md-2"></div><!--Créer un espacement naturel-->
                    <div id="card "class="card1" class="d-flex flex-column bd-highlight md-3">
                        <div class="image-flip" >
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="./assets/img/goat.jpg" alt="Zoo Terre Happy" title="Zoo" width="20px" height="auto"></p>
                                            <h4 class="card-title">Zoo-Terre Happy</h4>
                                            <a href="<?php echo LOCAL_URL;?>/#.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a id="cards" href="<?php echo LOCAL_URL;?>/index?page=zoo">
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Zoo-Terre Happy</h4>
                                            <p class="card-text">Ferme Pédagogique pouvant être visitée. Encadrée par des professionels. </p>
                                            <br>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center">
                                                        <button class="ensavoirplus">En savoir plus</button>
                                                    </a></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <!-- Garden Of My Earth -->
                    <div id="card" class="card2"class="col-xs-12 col-sm-1 col-md-3">
                        <div class="image-flip" >
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="./assets/img/investment.jpg" alt="Garden of my Earth" title="Jardin bio"></p>
                                            <h4 class="card-title">Garden Of My Earth</h4>
                                            <a href="<?php echo LOCAL_URL;?>/#.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a id="cards" href="<?php echo LOCAL_URL;?>/index?page=garden">
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Garden Of My Earth</h4>
                                            <p class="card-text">Jardin de permaculture bio afin de préserver la biodiversité des sols.</p>
                                           <br>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center"href="<?php echo LOCAL_URL;?>/index?page=garden">
                                                        <button class="ensavoirplus">En savoir plus</button>
                                                    </a></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             <!--fermeture de la 1ère row-->
            </div> 
            <!--Bee Happy Culteur-->
            <div class="row">
               <div class="col-md-4" no></div>
                <div  id="card" class="card4" class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="./assets/img/api.jpg" alt="bee happy culture" title="Apiculture"></p>
                                        <h4 class="card-title">Bee Happy Culture</h4>
                                        <a href="<?php echo LOCAL_URL;?>/index?page=api" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <a id="cards" href="<?php echo LOCAL_URL;?>/index?page=api">
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Bee Happy culture</h4>
                                        <p class="card-text">Espace dédié à Apiculture.</p>
                                        <br>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" href="<?php echo LOCAL_URL;?>/index?page=api">
                                                    <button class="ensavoirplus">En savoir plus</button>
                                                </a></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Playful Park Of Family-->
            <div class="row">
                <div class="col-md-4"></div>
                <div  id="card"class="card3" class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="./assets/img/trees.jpg" alt="Playful Park of Family" title="Espace Familiale"></p>
                                        <h4 class="card-title">Playful Park Of Family</h4>
                                        <a href="<?php echo LOCAL_URL;?>/#.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <a id="cards" href="<?php echo LOCAL_URL;?>/index?page=playful">
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Playful Park Of Family</h4>
                                        <p class="card-text">Espace d'accueil pour les activités en famille.</p>
                                        <br>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" href="<?php echo LOCAL_URL;?>/index?page=playful">
                                                    <button class="ensavoirplus">En savoir plus</button>
                                                </a></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fermeture de la  row-->
                </div>
            </div>
        </section>
    </div>
</div>
</div>
