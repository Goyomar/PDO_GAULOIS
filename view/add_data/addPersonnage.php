<?php ob_start();
?>

<form action="" method="post">
    <label for="personnage">Choix du nouveau personnage</label><br>
    <p><label for="nom">Nom :
        <input type="text" name="perso_add_nom" placeholder="Thierry">
    </label></p>
    <p><label for="adresse">Adresse :
        <input type="text" name="perso_add_adresse" placeholder="Maison 5">
    </label></p>
    <p><label for="image">Image :
        <input type="text" name="perso_add_image" placeholder="image.jpg">
    </label></p>
    <p><label for="lieu">Lieu :
        <select name="perso_add_lieu">
            <?php
            foreach ($requete1 as $lieu) {
                echo "<option value='".$lieu['id_lieu']."'>".$lieu['nom_lieu']."</option>";
            }
            ?>
        </select>
    </label></p>
    <p><label for="specialite">Specialite :
        <select name="perso_add_specialite">
            <?php
            foreach ($requete2 as $specialite) {
                echo "<option value='".$specialite['id_specialite']."'>".$specialite['nom_specialite']."</option>";
            }
            ?>
        </select>
    </label></p>
    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT PERSONNAGE";
$titre_secondaire = "Voici le formulaire pour ajouter un personnage qui sera disponible pour les gaulois !";
$contenu = ob_get_clean();
require "view/template.php";