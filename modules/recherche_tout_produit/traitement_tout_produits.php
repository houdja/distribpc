<?php
require_once('C:/xampp/htdocs/distribpc/component/header.php');
require_once('C:/xampp/htdocs/distribpc/component/navbar.php');
?>

<section class='result'>
<div class="container">
        <div class="contain_card">
        <?php
        require_once('C:/xampp/htdocs/distribpc/modules/recherche_tout_produit/affiche.php');
        ?>
        <?= @$msg ?>
        </div>
    </div>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/component/footer.php');
?>