<?php
include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');
include("C:/xampp/htdocs/distribpc/modules/affiche_peripherique/compteur.php");


$sql = " SELECT * FROM produits WHERE produits.id_categorie = (SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie = 'Périphériques') LIMIT " . $premiereEntree . ", " . $messagesParPage . " ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
