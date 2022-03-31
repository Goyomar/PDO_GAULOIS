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
                    <td><?= $lieu["nb"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "lieux MAX d'habitants";
$titre_secondaire = "Nom du / des lieu(x) possédant le plus d'habitants, en dehors du village gaulois";
$contenu = ob_get_clean();
require "view/template.php";