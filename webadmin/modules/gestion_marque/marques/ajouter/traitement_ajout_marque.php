<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");

?>

<?php


$marque = trim($_POST['marque']);

$sql = "INSERT INTO marque (`nom_marque`)  VALUES (:marque)";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('marque', $marque, PDO::PARAM_STR);
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