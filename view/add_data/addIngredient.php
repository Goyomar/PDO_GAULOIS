<?php ob_start(); ?>

<form action="" method="post">
    <label for="ingredient">Choix de nouveaux ingredient</label>
    <p><label for="nom">Nom :
        <input type="text" name="add_ingredient">
    </label></p>
    <p><label for="cout">Cout :
        <input type="number" name="add_ingredient_cout">
    </label></p>
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT INGREDIENT";
$titre_secondaire = "Voici le formulaire pour ajouter une ingredient qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";