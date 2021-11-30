<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['mdp']);
  if ($username != "" && $password != "") {
    try {
      $query = "select * from `user` where `username`=:username and `mdp`=:password";
      $stmt = $db->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id'] = $row['id_user'];
        $_SESSION['sess_user_name'] = $row['username'];
        $_SESSION['sess_name'] = $row['Nom'];
        header('location:http://localhost/distribpc/webadmin/index.php');
      } else {
        $msg = "Identifiant ou mot de passe incorrect!";
      }
    } catch (PDOException $e) {
      echo "Error : " . $e->getMessage();
    }
  } else {
    $msg = "Remplir les champs requis!";
  }
}
