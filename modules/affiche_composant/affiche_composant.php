<?php
include('C:/xampp/htdocs/distribpc/modules/affiche_composant/requete_composant.php');
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="card_produit">
        <img src="http://localhost/distribpc/img/<?php echo htmlspecialchars($row['image_produit']); ?>" alt="<?php echo htmlspecialchars($row['nom_produit']); ?>" class="produit_pic">
        <div class="info_produit">
            <div class="left">
                <?php
                if (htmlspecialchars($row['promo']) == 'true') { ?>

                    <p class='promo'>En promotion</p>

                <?php } ?>
                <p><b><?php echo htmlspecialchars($row['marque']); ?></b></p>
                <p><b><?php echo htmlspecialchars($row['nom_produit']); ?></b></p>
                <p class="produit_desc"><?php echo htmlspecialchars($row['description_courte']); ?>...</p>
                <button><a href="modules/detailproduit/detail_produit.php?id_produit=<?php echo htmlspecialchars($row['id_produit']); ?>">Plus de details</a></button>
            </div>
            <div class="right">
                <p><?php echo htmlspecialchars($row['prix']); ?> €</p>
                <?php
                if (htmlspecialchars($row['disponible']) == 'disponible') { ?>

                    <p class='disponible'>Disponible</p>

                <?php } else { ?>

                    <p class='pas_dispo'>Pas dispo</p>

                <?php } ?>

            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php
echo '<p align="center" class="pagination"> '; //Pour l'affichage, on centre la liste des pages
for ($i = 1; $i <= $nombreDePages; $i++) //On fait notre boucle
{
    //On va faire notre condition
    if ($i == $pageActuelle) //Si il s'agit de la page actuelle...
    {
        echo ' [ ' . $i . ' ] ';
    } else //Sinon...
    {
        echo ' <a href="composant.php?page=' . $i . '">' . $i . '</a> ';
    }
}
echo '</p>';

?>