<?php

namespace Controller;
use Model\Connect;

class GauloisController {

    public function showAddSpecialteForm(){
        require "view/add_data/addSpecialite.php";
    }

    public function addSpecialite(){
        $specialite = filter_input(INPUT_POST,"add_specialite",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($specialite) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("INSERT INTO specialite (nom_specialite) VALUES (?)")->execute([$specialite]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddLieuForm(){
        require "view/add_data/addlieu.php";
    }

    public function addLieu(){
        $lieu = filter_input(INPUT_POST,"add_lieu",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($lieu) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("INSERT INTO lieu (nom_lieu) VALUES (?)")->execute([$lieu]);
            echo "Un nouveau lieu a été ajouté !";
        } else {
            echo "ERROR";
        }

    }

    public function showAddPersonnageForm(){
        $pdo = Connect::seConnecter();
        $requete1 = $pdo->query("
            SELECT id_lieu, nom_lieu
            FROM lieu
        ");
        $requete2 = $pdo->query("
            SELECT id_specialite, nom_specialite
            FROM specialite
        ");

        require "view/add_data/addPersonnage.php";
    }

    public function addPersonnage(){
        $nom = filter_input(INPUT_POST,"perso_add_nom",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $adresse = filter_input(INPUT_POST,"perso_add_adresse",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST,"perso_add_image",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lieu = filter_input(INPUT_POST,"perso_add_lieu",FILTER_SANITIZE_NUMBER_INT);
        $specialite = filter_input(INPUT_POST,"perso_add_specialite",FILTER_SANITIZE_NUMBER_INT);
        if ($nom && $adresse && $image && $lieu && $specialite) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO personnage (nom_personnage, adresse_personnage, image_personnage, id_lieu, id_specialite)
                VALUES (?, ?, ?, ?, ?)
            ")->execute([$nom, $adresse, $image, $lieu, $specialite]);
            header("Location:/PDO_GAULOIS/index.php?action=0");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddBatailleForm(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT id_lieu, nom_lieu
            FROM lieu
        ");
        require "view/add_data/addBataille.php";
    }

    public function addBataille(){
        $nom = filter_input(INPUT_POST,"add_nom_bataille",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $date = filter_input(INPUT_POST,"add_date_bataille",FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        // $date = new \DateTime($date);
        $lieu = filter_input(INPUT_POST,"add_lieu_bataille",FILTER_SANITIZE_NUMBER_INT);
        if ($nom && $date && $lieu) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO bataille (nom_bataille, date_bataille, id_lieu)
                VALUES (?, ?, ?)
            ")->execute([$nom, $date, $lieu]);

            header("Location:/PDO_GAULOIS/index.php?action=0");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddPotionForm(){
        require "view/add_data/addPotion.php";
    }

    public function addPotion(){
        $potion = filter_input(INPUT_POST,"add_potion",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($potion) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("INSERT INTO potion (nom_potion) VALUES (?)")->execute([$potion]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddIngredientForm(){
        require "view/add_data/addIngredient.php";
    }

    public function addIngredient(){
        $ingredient = filter_input(INPUT_POST,"add_ingredient",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cout = filter_input(INPUT_POST,"add_ingredient_cout",FILTER_SANITIZE_NUMBER_INT);
        if ($ingredient && $cout) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("INSERT INTO ingredient (nom_ingredient, cout_ingredient) VALUES (?, ?)")->execute([$ingredient, $cout]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddComposerForm(){
        $pdo = Connect::seConnecter();
        $requete1 = $pdo->query("
            SELECT id_potion, nom_potion
            FROM potion
        ");
        $requete2 = $pdo->query("
            SELECT id_ingredient, nom_ingredient
            FROM ingredient
        ");

        require "view/add_data/addComposer.php";
    }

    public function addComposer(){
        $potion = filter_input(INPUT_POST,"composer_add_potion",FILTER_SANITIZE_NUMBER_INT);
        $ingredient = filter_input(INPUT_POST,"composer_add_ingredient",FILTER_SANITIZE_NUMBER_INT);
        $qte = filter_input(INPUT_POST,"composer_add_qte",FILTER_SANITIZE_NUMBER_INT);
        if ($potion && $ingredient && $qte) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO composer (id_potion, id_ingredient, qte)
                VALUES (?, ?, ?)
            ")->execute([$potion, $ingredient, $qte]);
            header("Location:/PDO_GAULOIS/index.php?action=0");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddAutBoireForm(){
        $pdo = Connect::seConnecter();
        $requete1 = $pdo->query("
            SELECT id_potion, nom_potion
            FROM potion
        ");
        $requete2 = $pdo->query("
            SELECT id_personnage, nom_personnage
            FROM personnage
        ");

        require "view/add_data/addAutBoire.php";
    }

    public function addAutBoire(){
        $potion = filter_input(INPUT_POST,"autBoire_add_potion",FILTER_SANITIZE_NUMBER_INT);
        $perso = filter_input(INPUT_POST,"autBoire_add_personnage",FILTER_SANITIZE_NUMBER_INT);
        if ($potion && $perso) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO autoriser_boire (id_potion, id_personnage)
                VALUES (?, ?)
            ")->execute([$potion, $perso]);
            header("Location:/PDO_GAULOIS/index.php?action=0");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddBoireForm(){
        $pdo = Connect::seConnecter();
        $requete1 = $pdo->query("
            SELECT id_potion, nom_potion
            FROM potion
        ");
        $requete2 = $pdo->query("
            SELECT id_personnage, nom_personnage
            FROM personnage
        ");

        require "view/add_data/addBoire.php";
    }

    public function addBoire(){
        $potion = filter_input(INPUT_POST,"add_boire_potion",FILTER_SANITIZE_NUMBER_INT);
        $perso = filter_input(INPUT_POST,"add_boire_perso",FILTER_SANITIZE_NUMBER_INT);
        $date = filter_input(INPUT_POST,"add_boire_date",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qtt = filter_input(INPUT_POST,"add_boire_qtt",FILTER_SANITIZE_NUMBER_INT);
        if ($potion && $perso && $date && $qtt) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO boire (id_potion, id_personnage, date_boire, dose_boire)
                VALUES (?, ?, ?, ?)
            ")->execute([$potion, $perso, $date, $qtt]);
            // header("Location:/PDO_GAULOIS/index.php?action=0");
            // die();
            echo "YES";
        } else {
            echo "ERROR";
        }
    }

    public function showAddTypeCasqueForm(){
        require "view/add_data/addTypeCasque.php";
    }

    public function addTypeCasque(){
        $TypeCasque = filter_input(INPUT_POST,"add_TypeCasque",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($TypeCasque) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("INSERT INTO type_casque (nom_type_casque) VALUES (?)")->execute([$TypeCasque]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddCasqueForm(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT id_type_casque, nom_type_casque
            FROM type_casque
        ");

        require "view/add_data/addCasque.php";
    }

    public function addCasque(){
        $nom = filter_input(INPUT_POST,"add_nom_casque",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cout = filter_input(INPUT_POST,"add_cout_casque",FILTER_SANITIZE_NUMBER_INT);
        $type = filter_input(INPUT_POST,"add_type_casque",FILTER_SANITIZE_NUMBER_INT);
        if ($nom && $cout && $type) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO casque (nom_casque, cout_casque, id_type_casque)
                VALUES (?, ?, ?)
            ")->execute([$nom, $cout, $type]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function showAddPrendreCasqueForm(){
        $pdo = Connect::seConnecter();
        $requete1 = $pdo->query("
            SELECT id_casque, nom_casque
            FROM casque
        ");
        $requete2 = $pdo->query("
            SELECT id_personnage, nom_personnage
            FROM personnage
        ");
        $requete3 = $pdo->query("
            SELECT id_bataille, nom_bataille
            FROM bataille
        ");

        require "view/add_data/addPrendreCasque.php";
    }

    public function addPrendreCasque(){
        $casque = filter_input(INPUT_POST,"prendre_add_casque",FILTER_SANITIZE_NUMBER_INT);
        $perso = filter_input(INPUT_POST,"prendre_add_personnage",FILTER_SANITIZE_NUMBER_INT);
        $bataille = filter_input(INPUT_POST,"prendre_add_bataille",FILTER_SANITIZE_NUMBER_INT);
        $qtt = filter_input(INPUT_POST,"prendre_add_qtt",FILTER_SANITIZE_NUMBER_INT);
        if ($casque && $perso && $bataille && $qtt) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                INSERT INTO prendre_casque (id_casque, id_personnage, id_bataille, qte)
                VALUES (?, ?, ?, ?)
            ")->execute([$casque, $perso, $bataille, $qtt]);
            header("Location:/PDO_GAULOIS/index.php?action=3");
            die();
        } else {
            echo "ERROR";
        }
    }

    public function listGaulois() {

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT image_personnage, nom_personnage
            FROM personnage
            ORDER BY nom_personnage
        ");

        require "view/list/gaulois.php";
    }

    public function requete1(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT COUNT(p.id_personnage) AS nbGaulois, l.nom_lieu
            FROM personnage p
            INNER JOIN lieu l ON p.id_lieu = l.id_lieu
            GROUP BY nom_lieu
            ORDER BY nbGaulois DESC
        ");

        require "view/queries/requete1.php";
    }

    public function requete2(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_personnage, l.nom_lieu, s.nom_specialite
            FROM personnage p, lieu l, specialite s
            WHERE l.id_lieu = p.id_lieu AND s.id_specialite = p.id_specialite
            ORDER BY l.nom_lieu ASC, p.nom_personnage ASC
        ");

        require "view/queries/requete2.php";
    }

    public function requete3(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT s.nom_specialite, COUNT(p.id_personnage) AS nb_personnages 
            FROM specialite s 
            LEFT JOIN personnage p ON s.id_specialite = p.id_specialite
            GROUP BY s.id_specialite
            ORDER BY nb_personnages DESC
        ");

        require "view/queries/requete3.php";
    }

    public function requete4(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT b.nom_bataille, DATE_FORMAT(b.date_bataille, '%d %M -%y') AS date_bataille, l.nom_lieu
            FROM bataille b, lieu l
            WHERE b.id_lieu=l.id_lieu
            ORDER BY YEAR(b.date_bataille) ASC,   MONTH(b.date_bataille) DESC, DAY(b.date_bataille) DESC
        ");

        require "view/queries/requete4.php";
    }

    public function requete5(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_potion, SUM(i.cout_ingredient*c.qte) AS cout_potion
            FROM potion p
            LEFT JOIN composer c ON c.id_potion=p.id_potion
            LEFT JOIN ingredient i ON c.id_ingredient=i.id_ingredient
            GROUP BY p.id_potion
            ORDER BY cout_potion DESC
        ");

        require "view/queries/requete5.php";
    }

    public function requete6(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT i.nom_ingredient, SUM(i.cout_ingredient*c.qte) AS cout_ingredient
            FROM potion p, composer c, ingredient i
            WHERE p.id_potion=c.id_potion AND c.id_ingredient=i.id_ingredient AND p.nom_potion='Santé'
            GROUP BY i.id_ingredient
        ");

        require "view/queries/requete6.php";
    }

    public function requete7(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_personnage, SUM(pc.qte) AS nb_casques
            FROM personnage p, bataille b, prendre_casque pc
            WHERE p.id_personnage=pc.id_personnage
            AND pc.id_bataille=b.id_bataille
            AND b.nom_bataille='Bataille du village gaulois'
            GROUP BY p.id_personnage
            HAVING nb_casques >=ALL(
                SELECT SUM(pc.qte)
                FROM prendre_casque pc, bataille b
                WHERE b.id_bataille=pc.id_bataille
                AND b.nom_bataille='Bataille du village gaulois'
                GROUP BY pc.id_personnage
            )
        ");

        require "view/queries/requete7.php";
    }

    public function requete8(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_personnage, pt.nom_potion, SUM(b.dose_boire) AS qte_bue
            FROM personnage p, boire b, potion pt
            WHERE p.id_personnage=b.id_personnage
            AND b.id_potion=pt.id_potion
            GROUP BY p.id_personnage, pt.id_potion
            ORDER BY qte_bue DESC
        ");

        require "view/queries/requete8.php";
    }

    public function requete9(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT b.nom_bataille, SUM(pc.qte) AS nb_casques
            FROM bataille b, prendre_casque pc
            WHERE b.id_bataille=pc.id_bataille
            GROUP BY b.id_bataille
            HAVING nb_casques >=ALL(
                SELECT SUM(pc.qte) 
                FROM bataille b, prendre_casque pc
                WHERE b.ID_BATAILLE=pc.ID_BATAILLE
                GROUP BY b.id_bataille
            )
        ");

        require "view/queries/requete9.php";
    }

    public function requete10(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT COUNT(c.id_casque) AS nb_casques, tc.nom_type_casque,SUM(c.cout_casque)AS total
            FROM type_casque tc
            LEFT JOIN casque c ON tc.id_type_casque=c.id_type_casque
            GROUP BY tc.id_type_casque
            ORDER BY nb_casques DESC
        ");

        require "view/queries/requete10.php";
    }

    public function requete11(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
        SELECT p.nom_potion
        FROM potion p, ingredient i, composer c
        WHERE p.id_potion=c.id_potion
        AND c.id_ingredient=i.id_ingredient
        AND LOWER(i.nom_ingredient) LIKE'%poisson%'
        ");

        require "view/queries/requete11.php";
    }

    public function requete12(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT l.nom_lieu, COUNT(p.id_personnage) AS nb
            FROM personnage p, lieu l
            WHERE p.id_lieu = l.id_lieu
            AND l.nom_lieu != 'Village gaulois'
            GROUP BY l.id_lieu
            HAVING nb >=ALL(
                SELECT COUNT(p.id_personnage)
                FROM personnage p, lieu l
                WHERE l.id_lieu = p.id_lieu
                AND l.nom_lieu != 'Village gaulois'
                GROUP BY l.id_lieu
            )
        ");

        require "view/queries/requete12.php";
    }

    public function requete13(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_personnage
            FROM personnage p
            LEFT JOIN boire b ON p.id_personnage=b.id_personnage
            WHERE b.id_personnage IS NULL
            GROUP BY p.id_personnage
        ");

        require "view/queries/requete13.php";
    }

    public function requete14(){

        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT p.nom_personnage
            FROM personnage p
            WHERE p.id_personnage NOT IN(
                SELECT id_personnage
                FROM autoriser_boire a, potion pt
                WHERE pt.id_potion=a.id_potion
                AND pt.nom_potion='Magique'
            )
        ");

        require "view/queries/requete14.php";
    }
}