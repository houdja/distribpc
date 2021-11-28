<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT DISTINCT souscategorie.id_souscategorie, souscategorie.nom_souscategorie FROM souscategorie 
JOIN produits ON 
( produits.id_souscategorie = souscategorie.id_souscategorie )
WHERE produits.id_categorie = ( SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie ='Composants') ORDER BY souscategorie.nom_souscategorie ASC ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
