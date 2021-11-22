<?php

include('C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php');

$categorie = $_POST['categorie'];
$marque = $_POST['marque'];
$prix = $_POST['prix'];

$sql = " SELECT * FROM produits WHERE produits.id_categorie = (SELECT categorie.id_categorie FROM categorie WHERE categorie.nom_categorie = 'Composants') AND id_souscategorie = :categorie AND marque = :marque AND prix <= :prix ";

try{

$stmt = $db->prepare($sql);
$stmt->bindParam('categorie', $categorie, PDO::PARAM_STR);
$stmt->bindParam('marque', $marque, PDO::PARAM_STR);
$stmt->bindParam('prix', $prix, PDO::PARAM_STR);
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

?>