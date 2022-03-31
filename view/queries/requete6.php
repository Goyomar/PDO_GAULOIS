<?php ob_start(); ?>
<p class="uk-label uk-label-warning">POTION DE SANTE</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>INGREDIENT</th>
            <th>COUT</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_ingredient"] ?></td>
                    <td><?= $lieu["cout_ingredient"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "POTION DE SANTE";
$titre_secondaire = "Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Santé'.";
$contenu = ob_get_clean();
require "view/template.php";