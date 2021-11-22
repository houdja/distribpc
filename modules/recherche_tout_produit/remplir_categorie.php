<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT * FROM souscategorie WHERE souscategorie.id_categorie = (SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie = 'Composants') ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
