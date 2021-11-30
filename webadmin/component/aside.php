<ul class="aside_menu">
    <li class="<?php echo $_SERVER['REQUEST_URI'] == '/distribpc/webadmin/index.php' ?  'active' : '';  ?>"><a href="http://localhost/distribpc/webadmin/index.php"><img src="https://img.icons8.com/small/64/000000/home-page.png" /> Dashboard</a></li>

    <li class=" <?php echo $_SERVER['REQUEST_URI'] == '/distribpc/webadmin/produit.php' ?  'active' : '';  ?>"><a href="http://localhost/distribpc/webadmin/produit.php"><img src="https://img.icons8.com/ios-glyphs/64/000000/activity-grid-2.png" /> Gestion produits</a></li>

    <li class=" <?php echo $_SERVER['REQUEST_URI'] == '/distribpc/webadmin/marque.php' ?  'active' : '';  ?>"><a href="http://localhost/distribpc/webadmin/marque.php"><img src="https://img.icons8.com/ios-glyphs/64/000000/activity-grid-2.png" />Gestion marques</a></li>
    <li><a href="logout.php"><img src="https://img.icons8.com/small/64/000000/shutdown.png" />Déconnexion</a></li>
</ul>