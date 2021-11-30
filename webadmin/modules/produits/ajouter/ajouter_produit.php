<?php
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_name'] != "") {
} else {
  header('location:index.php');
}
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
      <form action="http://localhost/distribpc/webadmin/modules/produits/ajouter/traitement_ajout_produit.php" method='POST' class='dash_form'>

        <input type="text" name="num_ref" placeholder="N° réference">

        <div class="dual">
          <select name="marque">
            <option value="NULL">Choisir une marque</option>
            <?php
            require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_marque/affiche.php')
            ?>
          </select>
          <input type="text" name="nom_produit" placeholder="Nom du produit">
        </div>

        <div class="dual">
          <select name="categorie">
            <option value="NULL">Choisir une categorie</option>
            <?php
            require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_categorie/affiche.php') ?>
          </select>
          <select name="souscategorie">
            <option value="NULL">Choisir une souscategorie</option>
            <?php
            require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_souscategorie/affiche.php') ?>
          </select>
        </div>

        <div class="dual">
          <input type="text" name="prix" placeholder="Prix">
          <select name="meilleur_v">
            <option value="true">Meilleures ventes</option>
            <option value="NULL">Aucun</option>
          </select>
        </div>

        <div class="dual">
          <select name="dispo">
            <option value="disponible">Disponible</option>
            <option value="pas dispo">Indisponible</option>
          </select>
          <input type="text" name="garantit" placeholder="Garantit" value='NC'>
        </div>

        <div class="dual">
          <select name="promo">
            <option value="NULL">Pas en promo</option>
            <option value="true">Promo</option>
          </select>
          <input type="text" name='pourcentage_promo' placeholder="% Promo">
        </div>


        <input type="file" name="image_produit">

        <textarea name="descr_c" cols="30" rows="5" placeholder="Description courte" maxlength="50" class="desc_c"></textarea>
        <textarea name="descr_l" cols="30" rows="10" placeholder="Description longue"></textarea>

        <button type="submit">Ajouter</button>

      </form>
    </div>
  </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>