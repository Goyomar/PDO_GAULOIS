<?php ob_start(); ?>
<p class="uk-label uk-label-warning">TYPE CASQUE</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>BATAILLE</th>
            <th>NB_CASQUE</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nb_casques"] ?></td>
                    <td><?= $lieu["nom_type_casque"] ?></td>
                    <td><?= $lieu["total"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>

<?php
$titre = "TYPE CASQUE";
$titre_secondaire = "Combien existe-t-il de casques de chaque type et quel est leur montanttotal ? (classés par nombredécroissant)";
$contenu = ob_get_clean();
require "view/template.php";