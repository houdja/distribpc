<?php


$sql = "SELECT * FROM produits as prod JOIN categorie as cat ON (prod.id_categorie = cat.id_categorie) WHERE cat.id_categorie = (SELECT id_categorie FROM categorie WHERE nom_categorie = 'Composants') ";

try {

    $stmt = $db->query($sql);

    $count = $stmt->rowCount();
    if ($count == 0) {

        $msgprono = "En cours de saisie...";
    }

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
