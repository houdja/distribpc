<?php


$sql = "SELECT * FROM produits WHERE produits.disponible = 'pas dispo' ";

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
