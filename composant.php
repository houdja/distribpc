<?php
require_once('component/header.php');
require_once('component/navbar.php');
?>


<section class="produit">
    <div class="container">
        <div class="filtre">
            <h2>Affinez votre recherche</h2>
            <form class="par_nom">
                <div>
                    <label>Recherche par nom</label>
                    <input type="text" name="nom_produit" placeholder="Nom du produit" required>
                </div>

                <div>
                    <label>Prix</label>
                    <input type="range" min='0' max='2000' step='10' value="0" class='filtre_prix'>
                    <p class='affiche_prix'>0€</p>
                </div>
                <div>
                    <label>Categorie</label>
                    <select name="categorie">
                        <option value="0">0</option>
                        <option value="0">1</option>
                        <option value="0">2</option>
                        <option value="0">3</option>
                        <option value="0">4</option>
                        <option value="0">5</option>
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