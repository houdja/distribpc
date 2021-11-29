<?php

// récupérer marque
$sql = " SELECT * FROM marque ";

try {

    $stmt = $db->query($sql);

    $count = $stmt->rowCount();
    if ($count == 0) {

        $msgprono = "Marque en cours de saisie...";
    }

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
