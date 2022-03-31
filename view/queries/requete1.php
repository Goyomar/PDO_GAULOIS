<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "villages" : "village" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>LIEU</th>
            <th>NB HABITANTS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_lieu"] ?></td>
                    <td><?= $lieu["nbGaulois"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "lieux + nombre d'habitants";
$titre_secondaire = "Lieux + nombre d'habitants";
$contenu = ob_get_clean();
require "view/template.php";