<?php
// session_start();
// if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_name'] != "") {

// } else { 
// 	header('location:index.php');
// }
?>
<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/header.php');
?>
<section class="dashboard">
  <?php
  require_once('C:/xampp/htdocs/distribpc/webadmin/component/nav.php') ?>
  <aside>
    <?php
    require_once('C:/xampp/htdocs/distribpc/webadmin/component/aside.php') ?>
  </aside>
  <main>
    <div class='produit'>
      <h1>Modifier un produit</h1>
      <form action="http://localhost/distribpc/webadmin/modules/produits/modifier/traitement_modification.php" method='POST' class='dash_form'>

        <?php
        include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_modification_produit.php");
        ?>

        <button type="submit">Modifier</button>

      </form>
    </div>
  </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>