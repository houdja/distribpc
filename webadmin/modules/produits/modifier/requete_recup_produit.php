<?php

$id_produit = $_GET['id_produit'];

$sql = "select * from souscategorie as souscat  JOIN produits ON (souscat.id_souscategorie = produits.id_souscategorie) JOIN categorie as cat ON ( produits.id_categorie = cat.id_categorie ) where `id_produit`=:id_produit";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id_produit', $id_produit, PDO::PARAM_STR);
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
