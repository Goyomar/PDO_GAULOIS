<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <title><?= $titre ?></title>
</head>
<body>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li>
                <form method="get">
                <select name="action">
                    <option value="specialite">Specialite</option>
                    <option value="lieu">Lieu</option>
                    <option value="personnage">Personnage</option>
                    <option value="bataille">Bataille</option>
                    <option value="potion">Potion</option>
                    <option value="ingredient">Ingredient</option>
                    <option value="composer">Composer</option>
                    <option value="autBoire">Autoriser boire</option>
                    <option value="boire">Boire</option>
                    <option value="typeCasque">Type casque</option>
                    <option value="casque">Casque</option>
                    <option value="prendreCasque">Prendre casque</option>
                </select>
                <input type="submit" value="choisir">
                </form>
            </li>
            <li>
                <form method="get">
                    <label for="action">Choisisez la requete(0->14)</label>
                    <input type="text" name="action">
                    <input type="submit" value="envoyez">
                </form>
            </li>
        </ul>

    </div>
</nav>
    <div id="wrapper" class="uk-container uk-container-expand">
        <main>
            <div id="contenu">
                <h1 class="uk-heading-divider">PDO Gaulois</h1>
                
                <h2 class="uk-heading-bullet"><?= $titre_secondaire ?></h2>
                <?= $contenu ?>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>