<?php


$sql = "SELECT * FROM produits WHERE produits.meilleur_vente = 'true' ";

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
