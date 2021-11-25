<?php
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/lister/compteur.php");

// récupérer produits
$sql = "SELECT * FROM categorie as cat JOIN produits as prod ON (cat.id_categorie = prod.id_categorie) JOIN souscategorie as souscat ON (prod.id_souscategorie = souscat.id_souscategorie) LIMIT " . $premiereEntree . ", " . $messagesParPage . " ";

try {

  $stmt = $db->query($sql);

  $count = $stmt->rowCount();
  if ($count == 0) {

    $msgprono = "Produit en cours de saisie...";
  }

  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
