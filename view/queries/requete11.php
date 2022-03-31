<?php ob_start(); ?>
<p class="uk-label uk-label-warning">POTION AVEC POISSON</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>POTION</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_potion"] ?></td>
                </tr>
        <?php }
        $requete = null;
        ?>
    </tbody>
</table>

<?php
$titre = "POTION POISSON";
$titre_secondaire = "Nom des potions dont la recette comporte du poisson.";
$contenu = ob_get_clean();
require "view/template.php";