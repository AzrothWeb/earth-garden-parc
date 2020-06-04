<div class="container">
    <?php
        if ($_GET['submit'] === "Ajouter"){
            if ($_GET['mdp1'] == $_GET['mdp2']){
                $sqlAjout = "INSERT INTO users(name_user,firstname_user,pseudo_user,pass_user,id_role) VALUES ('" . $_GET['nom'] . "','" . $_GET['prenom'] . "','" . $_GET['pseudo'] . "',MD5('" . $_GET['mdp1'] . "'),". $_GET['id_role'] .")";
                echo $sqlAjout;
            }
        }
    ?>
</div>