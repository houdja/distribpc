<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");

?>

<?php


$categorie = trim($_POST['categorie']);
$souscategorie = trim($_POST['souscategorie']);
$marque = trim($_POST['marque']);
$nom_produit = trim($_POST['nom_produit']);
$prix = trim($_POST['prix']);
$descr_c = trim($_POST['descr_c']);
$descr_l = trim($_POST['descr_l']);
$num_ref = trim($_POST['num_ref']);
$dispo = trim($_POST['dispo']);
$meilleur_v = trim($_POST['meilleur_v']);
$promo = trim($_POST['promo']);
$pourcent_promo = trim($_POST['pourcentage_promo']);
$garantit = trim($_POST['garantit']);
$image_produit = trim($_POST['image_produit']);


$sql = "INSERT INTO produits (`id_categorie`, `id_souscategorie`, `marque`, `nom_produit`, `prix`, `description_courte`, `description`, `num_reference`, `disponible`, `meilleur_vente`, `promo`, `pourcentage_promo`, `garantit`, `image_produit`)  VALUES (:categorie, :souscategorie, :marque, :nom_produit, :prix, :descr_c, :descr_l, :num_ref, :dispo, :meilleur_v, :promo, :pourcentage_promo, :garantit, :image_produit)";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('categorie', $categorie, PDO::PARAM_STR);
  $stmt->bindValue('souscategorie', $souscategorie, PDO::PARAM_STR);
  $stmt->bindValue('marque', $marque, PDO::PARAM_STR);
  $stmt->bindValue('nom_produit', $nom_produit, PDO::PARAM_STR);
  $stmt->bindValue('prix', $prix, PDO::PARAM_STR);
  $stmt->bindValue('descr_c', $descr_c, PDO::PARAM_STR);
  $stmt->bindValue('descr_l', $descr_l, PDO::PARAM_STR);
  $stmt->bindValue('num_ref', $num_ref, PDO::PARAM_STR);
  $stmt->bindValue('dispo', $dispo, PDO::PARAM_STR);
  $stmt->bindValue('meilleur_v', $meilleur_v, PDO::PARAM_STR);
  $stmt->bindValue('promo', $promo, PDO::PARAM_STR);
  $stmt->bindValue('pourcentage_promo', $pourcent_promo, PDO::PARAM_STR);
  $stmt->bindValue('garantit', $garantit, PDO::PARAM_STR);
  $stmt->bindValue('image_produit', $image_produit, PDO::PARAM_STR);
  $stmt->execute();
  if ($stmt == true) {

    $msg = "Aucun résultat pour votre recherche";
  }


  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
}



?>
<?php

header('location:http://localhost/distribpc/webadmin/produit.php');
?>