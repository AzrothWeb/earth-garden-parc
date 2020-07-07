<?php
require_once(realpath(__DIR__ . '/../../view/site/header.php'));

function afficherAccueil()
{
    require_once(realpath(__DIR__ . '/../../view/site/indexView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}

function afficherNosValeurs()
{
    require_once(realpath(__DIR__ . '/../../view/site/valeursView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherLocation()
{
    require_once(realpath(__DIR__ . '/../../model/modelPage.php'));
    $resultatNb = recupnbLocations();
    foreach ($resultatNb as $res) {
        $nbLocation = $res->total;
    }
    if ($nbLocation != 0) {
        $resultat = recupLocations();
        require_once(realpath(__DIR__ . '/../../view/site/locationView.php'));
    } else {
        require_once(realpath(__DIR__ . '/../../view/site/locationTextView.php'));
    }
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherContact()
{
    require_once(realpath(__DIR__ . '/../../view/site/contactView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherDons()
{
    require_once(realpath(__DIR__ . '/../../view/site/donsView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherFormations()
{
    require_once(realpath(__DIR__ . '/../../model/modelPage.php'));
    $nbFormation = recupNbFormations();
    foreach ($nbFormation as $resultFormation){
    if ($resultFormation->total != 0) {
        $allFormations = recupAllFormations();
        require_once(realpath(__DIR__ . '/../../view/site/formationsView.php'));
    } else {
        require_once(realpath(__DIR__ . '/../../view/site/zeroFormationView.php'));
    }}
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherActivites()
{
    require_once(realpath(__DIR__ . '/../../model/modelPage.php'));
    $resultat = recupCategory();
    $resultatActivites = recupActivites();
    require_once(realpath(__DIR__ . '/../../view/site/activitesView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherUneActivite()
{ //pour afficher un page d'activité
    require_once(realpath(__DIR__ . '/../../model/modelPage.php'));
    $resultatActivite = recupUneActivite();
    require_once(realpath(__DIR__ . '/../../view/site/uneActiviteView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherDebuter()
{
    require_once(realpath(__DIR__ . '/../../view/site/debuterView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherBenevole()
{
    require_once(realpath(__DIR__ . '/../../view/site/benevoleView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherBilleterie()
{
    require_once(realpath(__DIR__ . '/../../view/site/billeterieView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherSidebar()
{
    require_once(realpath(__DIR__ . '/../../model/modelArticle.php'));
    require_once(realpath(__DIR__ . '/../../view/site/sidebarView.php'));
}
function afficherZoo()
{
    require_once(realpath(__DIR__ . '/../../view/site/zooView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherPlayful()
{
    require_once(realpath(__DIR__ . '/../../view/site/playfulView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherGarden()
{
    require_once(realpath(__DIR__ . '/../../view/site/gardenView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
function afficherFiltreCategory()
{
    require_once(realpath(__DIR__ . '/../../model/modelPage.php'));
    $resultat = recupCategory();
    $resultatActivites = recupResultatFiltre();
    require_once(realpath(__DIR__ . '/../../view/site/resultatActivitesView.php'));
    require_once(realpath(__DIR__ . '/../../view/site/footer.php'));
}
