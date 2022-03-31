<?php

use Controller\GauloisController;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ctrlGaulois = new GauloisController();

if(isset($_GET["action"])){
    switch ($_GET["action"]) {
        case "0": $ctrlGaulois->listGaulois(); break;
        case "1": $ctrlGaulois->requete1(); break;
        case "2": $ctrlGaulois->requete2(); break;
        case "3": $ctrlGaulois->requete3(); break;
        case "4": $ctrlGaulois->requete4(); break;
        case "5": $ctrlGaulois->requete5(); break;
        case "6": $ctrlGaulois->requete6(); break;
        case "7": $ctrlGaulois->requete7(); break;
        case "8": $ctrlGaulois->requete8(); break;
        case "9": $ctrlGaulois->requete9(); break;
        case "10": $ctrlGaulois->requete10(); break;
        case "11": $ctrlGaulois->requete11(); break;
        case "12": $ctrlGaulois->requete12(); break;
        case "13": $ctrlGaulois->requete13(); break;
        case "14": $ctrlGaulois->requete14(); break;
        case "specialite": $ctrlGaulois->showAddSpecialteForm(); break;
        case "lieu": $ctrlGaulois->showAddLieuForm(); break;
        case "personnage": $ctrlGaulois->showAddPersonnageForm(); break;
        case "bataille": $ctrlGaulois->showAddBatailleForm(); break;
        case "potion": $ctrlGaulois->showAddPotionForm(); break;
        case "ingredient": $ctrlGaulois->showAddIngredientForm(); break;
        case "composer": $ctrlGaulois->showAddComposerForm(); break;
        case "autBoire": $ctrlGaulois->showAddAutBoireForm(); break;
        case "boire": $ctrlGaulois->showAddBoireForm(); break;
        case "typeCasque": $ctrlGaulois->showAddTypeCasqueForm(); break;
        case "casque": $ctrlGaulois->showAddCasqueForm(); break;
        case "prendreCasque": $ctrlGaulois->showAddPrendreCasqueForm(); break;
    }
} else {
    $ctrlGaulois->listGaulois();
}

if(isset($_POST["add_specialite"])){
    $ctrlGaulois->addSpecialite();
} elseif (isset($_POST["add_lieu"])) {
    $ctrlGaulois->addLieu();
} elseif (isset($_POST["perso_add_nom"],$_POST["perso_add_adresse"],$_POST["perso_add_image"],$_POST["perso_add_lieu"],$_POST["perso_add_specialite"])) {
    $ctrlGaulois->addPersonnage();
} elseif (isset($_POST["add_nom_bataille"], $_POST["add_date_bataille"], $_POST["add_lieu_bataille"])) {
    $ctrlGaulois->addBataille();
} elseif (isset($_POST["add_potion"])) {
    $ctrlGaulois->addPotion();
} elseif (isset($_POST["add_ingredient"], $_POST["add_ingredient_cout"])) {
    $ctrlGaulois->addIngredient();
} elseif (isset($_POST["composer_add_potion"], $_POST["composer_add_ingredient"], $_POST["composer_add_qte"])) {
    $ctrlGaulois->addComposer();
} elseif (isset($_POST["autBoire_add_potion"], $_POST["autBoire_add_personnage"])) {
    $ctrlGaulois->addAutBoire();
} elseif (isset($_POST["add_boire_potion"], $_POST["add_boire_perso"], $_POST["add_boire_date"], $_POST["add_boire_qtt"])) {
    $ctrlGaulois->addBoire();
} elseif (isset($_POST["add_TypeCasque"])) {
    $ctrlGaulois->addTypeCasque();
} elseif (isset($_POST["add_nom_casque"], $_POST["add_cout_casque"], $_POST["add_type_casque"])) {
    $ctrlGaulois->addCasque();
} elseif (isset($_POST["prendre_add_casque"], $_POST["prendre_add_personnage"], $_POST["prendre_add_bataille"], $_POST["prendre_add_qtt"])) {
    $ctrlGaulois->addPrendreCasque();
}