<?php


include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");



?>

<?php

$id_produit = $_GET['id_produit'];

$sql = "DELETE FROM produits where `id_produit`=:id_produit";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id_produit', $id_produit, PDO::PARAM_STR);
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