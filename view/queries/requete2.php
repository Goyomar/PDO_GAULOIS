<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "personnages" : "personnage" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSO</th>
            <th>LIEU</th>
            <th>SPECIALITE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                    <td><?= $lieu["nom_lieu"] ?></td>
                    <td><?= $lieu["nom_specialite"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>
<?php
$titre = "DETAIL PERSO";
$titre_secondaire = "Nom des personnages+ spécialité + adresse et lieu d'habitation, triés par lieu puis par nom de personnage.";
$contenu = ob_get_clean();
require "view/template.php";
