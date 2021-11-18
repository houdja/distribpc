<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');
include("modules/pagination/compteur.php");

$sql = " SELECT * FROM produits LIMIT " . $premiereEntree . ", " . $messagesParPage . "";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
