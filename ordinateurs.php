<?php
require_once('component/header.php');
require_once('component/navbar.php');
?>


<section class="produit">
    <div class="container">
        <div class="filtre">
            <h2>Affinez votre recherche</h2>
            <form class="par_nom" method='POST' action='modules/recherche_ordinateurs/traitement_recherche.php'>
                <div>
                    <label>Prix</label>
                    <input type="range" name='prix' min='0' max='2000' step='10' value="0" class='filtre_prix'>
                    <p class='affiche_prix'>0€</p>
                </div>
                <div>
                    <label>Categorie</label>
                    <select name="categorie">
                        <option value="1">Ordinateur fixe</option>
                        <option value="2">Pc portable</option>
                    </select>
                </div>
                <div>
                    <label>Marque</label>
                    <select name="marque">
                        <option value="Distribpc">Distribpc</option>
                        <option value="MSI">MSI</option>
                    </select>
                </div>

                <button type="submit">Rechercher</button>
            </form>
        </div>
        <div class="contain_produit">
            <h1>Tout nos ordinateurs</h1>
            <?php
            require_once('C:/xampp/htdocs/distribpc/modules/affiche_ordinateur/affiche_ordinateur.php')
            ?>
        </div>
    </div>
</section>

<?php
require_once('component/footer.php');
?>