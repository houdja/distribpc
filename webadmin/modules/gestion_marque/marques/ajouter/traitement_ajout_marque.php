<?php
$target_dir = "C:/xampp/htdocs/distribpc/img/";
$target_file = $target_dir . basename($_FILES["image_marque"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image_marque"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image_marque"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image_marque"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["image_marque"]["name"])) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");

?>

<?php


$marque = trim($_POST['marque']);
$image_marque = (basename($_FILES["image_marque"]["name"]));

$sql = "INSERT INTO marque (`nom_marque`, `image_marque`)  VALUES (:marque, :image_marque)";
try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('marque', $marque, PDO::PARAM_STR);
  $stmt->bindValue('image_marque', $image_marque, PDO::PARAM_STR);
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