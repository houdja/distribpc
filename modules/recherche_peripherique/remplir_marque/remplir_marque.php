<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT DISTINCT marque FROM produits WHERE produits.id_categorie = (SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie = 'Périphériques') ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
