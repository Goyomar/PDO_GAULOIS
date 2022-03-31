<?php ob_start();
?>

<form action="" method="post">
    <label for="personnage">Choix d'une nouvelle bataille</label><br>
    <p><label for="nom">Nom :
        <input type="text" name="add_nom_bataille" placeholder="guerre St-mehnir">
    </label></p>

    <p><label for="date">Date :
        <input type="text" name="add_date_bataille" placeholder="0050-01-05">
    </label></p>

    <p><label for="lieu">Lieu :
        <select name="add_lieu_bataille">
            <?php
            foreach ($requete as $lieu) {
                echo "<option value='".$lieu['id_lieu']."'>".$lieu['nom_lieu']."</option>";
            }
            ?>
        </select>
   
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT BATAILLE";
$titre_secondaire = "Voici le formulaire pour ajouter une bataille qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";