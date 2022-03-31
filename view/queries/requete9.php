<?php ob_start(); ?>
<p class="uk-label uk-label-warning">LA BATAILLE ULTIME</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>BATAILLE</th>
            <th>NB_CASQUE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_bataille"] ?></td>
                    <td><?= $lieu["nb_casques"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "LA BATAILLE ULTIME";
$titre_secondaire = "Nom de la bataille où le nombre de casques pris a été le plus important.";
$contenu = ob_get_clean();
require "view/template.php";