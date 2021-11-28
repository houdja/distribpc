<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/header.php') ?>

<section class="dashboard">
    <?php
    require_once('C:/xampp/htdocs/distribpc/webadmin/component/nav.php') ?>
    <aside>
        <?php
        require_once('C:/xampp/htdocs/distribpc/webadmin/component/aside.php') ?>
    </aside>
    <main>
        <div class="all_stats">
            <h1>Statistiques</h1>
            <div class="number_products">
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/all_produit/affiche.php')
                ?>
            </div>
            <div class="contain_stats">
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_ordinateurs/affiche.php')
                ?>
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_composants/affiche.php')
                ?>
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_peripheriques/affiche.php')
                ?>
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/best_seller/affiche.php')
                ?>
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/rupture_stock/affiche.php')
                ?>
            </div>
        </div>
    </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>