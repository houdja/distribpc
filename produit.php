<?php
require_once('component/header.php');
require_once('component/navbar.php');
?>
<section class="produit">
    <div class="container">
        <div class="filtre"></div>
        <div class="contain_produit">
            <h1>Tout nos produits</h1>
            <?php
            require_once('C:\xampp\htdocs\distribpc\modules\affiche_tout_produit\affiche.php');
            ?>
        </div>
    </div>
</section>
<?php
require_once('component/footer.php');
?>