<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "specialités" : "specialite" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>SPECIALITE</th>
            <th>NB PERSONNAGES</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_specialite"] ?></td>
                    <td><?= $lieu["nb_personnages"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>
<?php
$titre = "SPECIALITE";
$titre_secondaire = "Nom  des  spécialités  avec  nombre  de personnagespar  spécialité  (trié  par  nombre  de personnagesdécroissant).";
$contenu = ob_get_clean();
require "view/template.php";