<?php ob_start(); ?>
<p class="uk-label uk-label-warning"><?= $requete->rowCount()?> PERSONNAGE NON BUVEUR</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSONNAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                </tr>
        <?php }
        $requete = null;
        ?>
    </tbody>
</table>

<?php
$titre = "PERSONNAGE NON BUVEUR";
$titre_secondaire = "Nom despersonnagesqui n'ont jamais bu aucune potion";
$contenu = ob_get_clean();
require "view/template.php";