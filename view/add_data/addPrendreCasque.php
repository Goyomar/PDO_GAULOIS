<?php ob_start();
?>

<form action="" method="post">
    <label for="casque">Qui prend des casques</label><br>

    <p><label for="type casque">Casque :
        <select name="prendre_add_casque">
            <?php
            foreach ($requete1 as $casque) {
                echo "<option value='".$casque['id_casque']."'>".$casque['nom_casque']."</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label for="type casque">Personnage :
        <select name="prendre_add_personnage">
            <?php
            foreach ($requete2 as $personnage) {
                echo "<option value='".$personnage['id_personnage']."'>".$personnage['nom_personnage']."</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label for="type casque">Bataille :
        <select name="prendre_add_bataille">
            <?php
            foreach ($requete3 as $bataille) {
                echo "<option value='".$bataille['id_bataille']."'>".$bataille['nom_bataille']."</option>";
            }
            ?>
        </select>
    </label></p>

    <p><label for="quantite">Quantite :
        <input type="text" name="prendre_add_qtt" placeholder="500">
    </label></p>

    <input type="submit" value="ajouter">
</form>


<?php
$titre = "AJOUT PRENDRE CASQUE";
$titre_secondaire = "Voici le formulaire pour ajouter une prise de casque !";
$contenu = ob_get_clean();
require "view/template.php";