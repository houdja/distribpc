<?php

// récupérer categorie
$sql = "select DISTINCT nom_categorie, id_categorie from categorie ";


try {

    $stmt = $db->query($sql);

    $count = $stmt->rowCount();
    if ($count == 0) {

        $msgprono = "Categorie en cours de saisie...";
    }

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
