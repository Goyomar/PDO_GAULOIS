<?php ob_start(); ?>

<form action="" method="post">
    <label for="specialite">Choix de la nouvelle specialite</label>
    <input type="text" name="add_specialite">
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT SPECIALITE";
$titre_secondaire = "Voici le formulaire pour ajouter une specialite qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";