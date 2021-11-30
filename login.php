<?php
session_start();
include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/connexionuser/requete_login.php");
require_once('component/header.php');
?>

<div class="container login">
    <form method='POST'>
        <h1>CONNEXION</h1>
        <input type="text" name='username' placeholder="Username" required>
        <input type="password" name='mdp' placeholder="Mot de passe" required>
        <button type="submit" name="submitBtnLogin">Se connecter</button>

    </form>
    <img src="img/login.jpg" alt="Ordinateur" class='img_login'>
</div>



</body>

</html>