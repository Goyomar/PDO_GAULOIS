<?php ob_start(); ?>

<form action="" method="post">
    <label for="potion">Choix de la nouvelle potion</label>
    <input type="text" name="add_potion">
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT POTION";
$titre_secondaire = "Voici le formulaire pour ajouter une potion qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";