<?php
include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');
include("C:/xampp/htdocs/distribpc/modules/affiche_composant/compteur.php");


$sql = " SELECT * FROM produits WHERE produits.id_categorie = (SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie = 'Composants') LIMIT " . $premiereEntree . ", " . $messagesParPage . " ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
