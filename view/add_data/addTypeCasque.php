<?php ob_start(); ?>

<form action="" method="post">
    <label for="lieu">Choix d'un nouveau type de casque</label>
    <input type="text" name="add_TypeCasque">
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT lieu";
$titre_secondaire = "Voici le formulaire pour ajouter une lieu qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";