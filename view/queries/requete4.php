<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "batailles" : "bataille" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>NOM_BATAILLE</th>
            <th>DATE_BATAILLE</th>
            <th>NOM_LIEU</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_bataille"] ?></td>
                    <td><?= $lieu["date_bataille"] ?></td>
                    <td><?= $lieu["nom_lieu"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>
<?php
$titre = "DETAIL BATAILLE";
$titre_secondaire = "Nom,date  etlieu des  batailles, de  la  plus  récente  à  la  plus  ancienne  (dates affichées au format jj/mm/aaaa).";
$contenu = ob_get_clean();
require "view/template.php";
