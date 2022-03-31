<?php ob_start();
?>

<form action="" method="post">
    <label for="personnage">Faire boire un gaulois !</label><br>
    <p><label for="potion">potion :
        <select name="add_boire_potion">
            <?php
            foreach ($requete1 as $potion) {
                echo "<option value='".$potion['id_potion']."'>".$potion['nom_potion']."</option>";
            }
            ?>
        </select>
    </label></p>
    <p><label for="personnage">personnage :
        <select name="add_boire_perso">
            <?php
            foreach ($requete2 as $personnage) {
                echo "<option value='".$personnage['id_personnage']."'>".$personnage['nom_personnage']."</option>";
            }
            ?>
        </select>
    </label></p>
    <p><label for="date">Date boire :
        <input type="date" name="add_boire_date">
    </label></p>
    <p><label for="qtt">Qunatite bue :
        <input type="number" name="add_boire_qtt">
    </label></p>
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT personnage POTION";
$titre_secondaire = "Voici le formulaire pour ajouter un personnage qui aura le droit de boire !";
$contenu = ob_get_clean();
require "view/template.php";