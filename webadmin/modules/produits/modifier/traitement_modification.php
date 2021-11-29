<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");

?>

<?php


$marque = $_POST['marque'];
$num_ref = trim($_POST['num_ref']);
$prix = trim($_POST['prix']);
$meilleur_v = $_POST['meilleur_v'];
$souscategorie = $_POST['souscategorie'];
$categorie = $_POST['categorie'];
$dispo = $_POST['dispo'];
$garantit = $_POST['garantit'];
$promo = $_POST['promo'];
$pourcentage_promo = trim($_POST['pourcentage_promo']);
$image_produit = $_POST['image_produit'];
$descr_c = $_POST['descr_c'];
$descr_l = $_POST['descr_l'];
$id_produit = $_POST['id_produit'];




$sql = " UPDATE produits SET `marque`=:marque, `num_reference`=:num_ref, `prix`=:prix, `meilleur_vente`=:meilleur_v, `id_souscategorie`=:souscategorie, `id_categorie`=:categorie, `disponible`=:dispo, `garantit`=:garantit, `promo`=:promo, `pourcentage_promo`=:pourcentage_promo, `image_produit`=:image_produit, `description_courte`=:descr_c, `description`=:descr_l   WHERE `id_produit`=:id_produit ";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('marque', $marque, PDO::PARAM_STR);
  $stmt->bindValue('num_ref', $num_ref, PDO::PARAM_STR);
  $stmt->bindValue('prix', $prix, PDO::PARAM_STR);
  $stmt->bindValue('meilleur_v', $meilleur_v, PDO::PARAM_STR);
  $stmt->bindValue('souscategorie', $souscategorie, PDO::PARAM_STR);
  $stmt->bindValue('categorie', $categorie, PDO::PARAM_STR);
  $stmt->bindValue('dispo', $dispo, PDO::PARAM_STR);
  $stmt->bindValue('garantit', $garantit, PDO::PARAM_STR);
  $stmt->bindValue('promo', $promo, PDO::PARAM_STR);
  $stmt->bindValue('pourcentage_promo', $pourcentage_promo, PDO::PARAM_STR);
  $stmt->bindValue('image_produit', $image_produit, PDO::PARAM_STR);
  $stmt->bindValue('descr_c', $descr_c, PDO::PARAM_STR);
  $stmt->bindValue('descr_l', $descr_l, PDO::PARAM_STR);
  $stmt->bindValue('id_produit', $id_produit, PDO::PARAM_STR);
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


// echo $souscategorie . $id_produit . $categorie . $marque . $nom_produit . $prix . $descr_c . $descr_l . $num_ref . $dispo . $meilleur_v . $promo . $pourcent_promo . $garantit . $image_produit;

header('location:http://localhost/distribpc/webadmin/produit.php');


?>