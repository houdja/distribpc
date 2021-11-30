<?php
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_name'] != "") {
} else {
    header('location:index.php');
}
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
            <div class="en_tete">
                <h1>Liste des produits</h1>
                <button><a href="http://localhost/distribpc/webadmin/modules/produits/ajouter/ajouter_produit.php"> Ajouter</a></button>
            </div>
            <table>
                <tr class='titre'>
                    <th>N° réference</th>
                    <th>Categorie</th>
                    <th>Sous categorie</th>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Disponibilité</th>
                    <th>Promo</th>
                    <th>% promo</th>
                    <th>Garantit</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <?php
                require_once('C:\xampp\htdocs\distribpc\webadmin\modules\produits\lister\affiche_produit.php')
                ?>
        </div>
    </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>