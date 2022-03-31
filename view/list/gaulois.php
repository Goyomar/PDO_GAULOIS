<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "gaulois" : "gauloi" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSONNAGE</th>
            <th>IMAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                    <td><?= $lieu["image_personnage"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "PERSONNAGE";
$titre_secondaire = "Les gaulois :)";
$contenu = ob_get_clean();
require "view/template.php";