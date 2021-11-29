<?php
require_once('C:\xampp\htdocs\distribpc\webadmin\component\header.php');
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
                <h1>Gérer les marques</h1>
                <button><a href="http://localhost/distribpc/webadmin/modules/gestion_marque/marques/ajouter/ajouter_marque.php"> Ajouter</a></button>
            </div>
            <table>
                <tr class='titre'>
                    <th>Nom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <?php
                require_once('C:/xampp/htdocs/distribpc/webadmin/modules/gestion_marque/marques/lister/affiche.php')
                ?>
    </div>
    </main>
</section>

<?php
require_once('C:/xampp/htdocs/distribpc/webadmin/component/footer.php') ?>