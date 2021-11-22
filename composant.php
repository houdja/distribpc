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
                    <label>Marque</label>
                    <select name="marque">
                        <option value="Asus">Asus</option>
                        <option value="Ballistix">Ballistix</option>
                        <option value="Abkoncore">Abkoncore</option>
                    </select>
                </div>

                <div>
                    <label>Prix</label>
                    <input type="range" name='prix' min='0' max='2000' step='10' value="0" class='filtre_prix'>
                    <p class='affiche_prix'>0€</p>
                </div>
                <div>
                    <label>Categorie</label>
                    <select name="categorie">
                        <option value="9">RAM</option>
                        <option value="12">Carte graphique</option>
                        <option value="16">Boitier</option>
                    </select>
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