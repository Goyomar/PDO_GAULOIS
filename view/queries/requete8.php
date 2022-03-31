<?php ob_start(); ?>
<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(),($requete->rowCount() > 1) ? "buveurs" : "buveur" ?></p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>PERSONNAGE</th>
            <th>POTION</th>
            <th>BUE</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // var_dump($requete->fetchAll());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu["nom_personnage"] ?></td>
                    <td><?= $lieu["nom_potion"] ?></td>
                    <td><?= $lieu["qte_bue"] ?></td>
                </tr>
        <?php }

        $requete = null;

        ?>
    </tbody>
</table>
<?php
$titre = "PLUS GROS BUVEUR";
$titre_secondaire = "Nom  des personnageset,en distinguant  chaque  potion, laquantité  de  potion  bue.  Les classerdu plus grand buveur au plus modeste.";
$contenu = ob_get_clean();
require "view/template.php";
