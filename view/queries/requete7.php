<?php ob_start(); ?>
<p class="uk-label uk-label-warning">LE BOSS</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSONNAGE</th>
            <th>CASQUE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                    <td><?= $lieu["nb_casques"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "LE BOSS";
$titre_secondaire = "Nom du ou des personnagesqui ont pris le plus de casques dans la bataille 'Bataille du village gaulois'.";
$contenu = ob_get_clean();
require "view/template.php";