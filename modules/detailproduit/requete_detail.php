<?php

$idproduit = $_GET['id_produit'];



$sql = "SELECT * FROM produits WHERE id_produit=:id_produit";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id_produit', $idproduit, PDO::PARAM_STR);
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
