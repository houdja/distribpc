<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_peripheriques/compteur.php');

$sql = "SELECT * FROM souscategorie as souscat JOIN produits as prod ON (prod.id_souscategorie = souscat.id_souscategorie) JOIN categorie as cat ON (prod.id_categorie = cat.id_categorie) WHERE cat.id_categorie = (SELECT id_categorie FROM categorie WHERE nom_categorie = 'Périphériques') LIMIT " . $premiereEntree . ", " . $messagesParPage . " ";

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
