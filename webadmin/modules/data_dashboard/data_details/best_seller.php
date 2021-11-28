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
        <div class="details">
            <h1>Détails</h1>
            <div class="contain_details">
                <div class="info_categorie">
                    <div class="active">
                        <div class='produit'>
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
                                </tr>
                                <?php
                                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/best_seller/affiche_produit.php')
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>

</section>
<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>