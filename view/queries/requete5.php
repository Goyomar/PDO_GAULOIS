<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "potions" : "potion" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>POTION</th>
            <th>COUT</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_potion"] ?></td>
                    <td><?= $lieu["cout_potion"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "POTION";
$titre_secondaire = "Nom des potions + coût de réalisation de la potion (trié par coût décroissant).";
$contenu = ob_get_clean();
require "view/template.php";