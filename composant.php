<?php
require_once('component/header.php');
require_once('component/navbar.php');
?>


<section class="produit">
    <div class="container">
        <div class="filtre">
            <h2>Affinez votre recherche</h2>
            <form class="par_nom" action='modules/recherche_composant/traitement_composant.php' method='POST'>

                <div>
                    <label>Prix</label>
                    <?php
                    require_once('C:/xampp/htdocs/distribpc/modules/recherche_composant/affiche_maxprice/affiche_maxprixce.php')
                    ?>
                    <p class='affiche_prix'>0€</p>
                </div>
                <div>
                    <label>Categorie</label>
                    <?php
                    require_once('C:/xampp/htdocs/distribpc/modules/recherche_composant/remplir_categorie/affiche_categorie.php')
                    ?>
                </div>
                <div>
                    <label>Marque</label>
                    <?php
                    require_once('C:/xampp/htdocs/distribpc/modules/recherche_composant/remplir_marque/affiche_marque.php')
                    ?>
                </div>
                <button type="submit">Rechercher</button>
            </form>
        </div>
        <div class="contain_produit">
            <h1>Tout nos composants</h1>
            <?php
            require_once('C:/xampp/htdocs/distribpc/modules/affiche_composant/affiche_composant.php')
            ?>
        </div>
    </div>
</section>

<?php
require_once('component/footer.php');
?>