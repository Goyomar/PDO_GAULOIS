<?php ob_start();
?>

<form action="" method="post">
    <label for="casque">Choix du nouveau casque</label><br>
    <p><label for="nom">Nom :
        <input type="text" name="add_nom_casque" placeholder="Negau">
    </label></p>

    <p><label for="cout">Cout :
        <input type="text" name="add_cout_casque" placeholder="500">
    </label></p>

    <p><label for="type casque">Type casque :
        <select name="add_type_casque">
            <?php
            foreach ($requete as $type_casque) {
                echo "<option value='".$type_casque['id_type_casque']."'>".$type_casque['nom_type_casque']."</option>";
            }
            ?>
        </select>
    </label></p>

    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT CASQUE";
$titre_secondaire = "Voici le formulaire pour ajouter un casque qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";