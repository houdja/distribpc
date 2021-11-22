<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$sql = " SELECT * FROM souscategorie";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
