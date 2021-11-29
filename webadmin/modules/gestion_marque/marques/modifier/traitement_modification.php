<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");

?>

<?php

$id_marque = $_POST['id_marque'];
$marque = $_POST['nom_marque'];
$imageMarque = $_POST['image_marque'];

$sql = " UPDATE marque SET `nom_marque`=:marque, `image_marque`=:image_marque WHERE `id_marque`=:id_marque ";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('id_marque', $id_marque, PDO::PARAM_STR);
  $stmt->bindValue('marque', $marque, PDO::PARAM_STR);
  $stmt->bindValue('image_marque', $imageMarque, PDO::PARAM_STR);
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

header('location:http://localhost/distribpc/webadmin/marque.php');


?>