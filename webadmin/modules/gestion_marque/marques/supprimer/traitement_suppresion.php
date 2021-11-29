<?php


include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");



?>

<?php

$id_marque = $_GET['id_marque'];

$sql = "DELETE FROM marque where `id_marque`=:id_marque";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id_marque', $id_marque, PDO::PARAM_STR);
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