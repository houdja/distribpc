<?php

$id_marque = $_GET['id_marque'];

$sql = "select * from marque where `id_marque`=:id_marque";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id_marque', $id_marque, PDO::PARAM_STR);
  $stmt->execute();
  $count = $stmt->rowCount();
  if ($count == 0) {

    $msg = "Aucun résultat pour votre recherche";
  }


  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
}
