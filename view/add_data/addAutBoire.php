<?php ob_start();
?>

<form action="" method="post">
    <label for="personnage">Ajout du droit de boire pour un gaulois !</label><br>
    <p><label for="potion">potion :
        <select name="autBoire_add_potion">
            <?php
            foreach ($requete1 as $potion) {
                echo "<option value='".$potion['id_potion']."'>".$potion['nom_potion']."</option>";
            }
            ?>
        </select>
    </label></p>
    <p><label for="personnage">personnage :
        <select name="autBoire_add_personnage">
            <?php
            foreach ($requete2 as $personnage) {
                echo "<option value='".$personnage['id_personnage']."'>".$personnage['nom_personnage']."</option>";
            }
            ?>
        </select>
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT personnage POTION";
$titre_secondaire = "Voici le formulaire pour ajouter un personnage qui aura le droit de boire !";
$contenu = ob_get_clean();
require "view/template.php";