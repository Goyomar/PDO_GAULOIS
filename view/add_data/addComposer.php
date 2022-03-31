<?php ob_start();
?>

<form action="" method="post">
    <label for="personnage">Ajout ingredient recette potion !</label><br>
    <p><label for="potion">potion :
        <select name="composer_add_potion">
            <?php
            foreach ($requete1 as $potion) {
                echo "<option value='".$potion['id_potion']."'>".$potion['nom_potion']."</option>";
            }
            ?>
        </select>
    </label></p>
    <p><label for="ingredient">ingredient :
        <select name="composer_add_ingredient">
            <?php
            foreach ($requete2 as $ingredient) {
                echo "<option value='".$ingredient['id_ingredient']."'>".$ingredient['nom_ingredient']."</option>";
            }
            ?>
        </select>
    </label></p>
        <p><label for="qte">quantite :
        <input type="text" name="composer_add_qte" placeholder="3">
    </label></p>
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT INGREDIENT POTION";
$titre_secondaire = "Voici le formulaire pour ajouter un ingredient qui sera disponible pour les potions !";
$contenu = ob_get_clean();
require "view/template.php";