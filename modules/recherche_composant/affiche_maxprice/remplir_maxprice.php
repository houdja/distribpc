<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT * FROM souscategorie JOIN produits ON ( produits.id_souscategorie = souscategorie.id_souscategorie ) WHERE produits.id_categorie = ( SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie ='Composants') ORDER BY prix DESC LIMIT 1";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
