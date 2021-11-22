<nav class="main_navbar">
    <div class="logo">
        <a href="http://localhost/distribpc/index.php">Distrib pc</a>
    </div>
    <ul class="menu">
        <li><a href="http://localhost/distribpc/index.php">Accueil</a></li>
        <li class='has_children'><a href="http://localhost/distribpc/produit.php">Nos produits</a>
            <div class="submenu">
                <div class="container">
                    <ul>
                        <?php require_once('C:\xampp\htdocs\distribpc\modules\affiche_souscategorie\ordinateur\affiche.php')
                        ?>
                    </ul>
                    <ul>
                        <?php require_once('C:\xampp\htdocs\distribpc\modules\affiche_souscategorie\peripherique\affiche.php')
                        ?>
                    </ul>
                    <ul>
                        <?php require_once('C:\xampp\htdocs\distribpc\modules\affiche_souscategorie\composant\affiche.php')
                        ?>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="http://localhost/distribpc/presentation.php">Presentation</a></li>
        <li><a href="http://localhost/distribpc/contact.php">Contact</a></li>
    </ul>
    <div class="search">
        <form>
            <input type="search" name="search">
            <button>
                <span class="material-icons">
                    search
                </span>
            </button>
        </form>
    </div>
</nav>