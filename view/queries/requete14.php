<?php ob_start(); ?>
<p class="uk-label uk-label-warning"><?= $requete->rowCount()?> PERSONNAGE PAS DROIT BOIRE</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSONNAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                </tr>
        <?php }
        $requete = null;
        ?>
    </tbody>
</table>

<?php
$titre = "PERSONNAGE PAS DROIT BOIRE";
$titre_secondaire = "Nom du / des personnagesqui n'ont pas le droit de boire de la potion 'Magique'.";
$contenu = ob_get_clean();
require "view/template.php";