<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT * FROM produits WHERE meilleur_vente = 'true' LIMIT 8 ";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
