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
      <h1>Ajouter un produit</h1>
      <form action="http://localhost/distribpc/webadmin/modules/gestion_marque/marques/ajouter/traitement_ajout_marque.php" method='POST' class='dash_form'>

        <input type="text" name="marque" placeholder="Nom de la marque">

        <input type="file" name="image_marque" required>

        <button type="submit">Ajouter</button>

      </form>
    </div>
  </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>