<?php
include('C:\xampp\htdocs\distribpc\modules\affiche_meilleure_ventes\requete_meilleur_vente.php');
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="card">
        <img src="img/<?php echo htmlspecialchars($row['image_produit']); ?>" alt="<?php echo htmlspecialchars($row['nom_produit']); ?>" class='card_pic'>
        <div class="card_text">
            <p><?php echo htmlspecialchars($row['nom_produit']); ?></p>

            <p class='descr'><?php echo htmlspecialchars($row['description_courte']); ?></p>

            <p><?php echo htmlspecialchars($row['prix']); ?> €</p>

            <?php if (htmlspecialchars($row['promo']) == 'true') { ?>

                <p class='promo'>En promotion</p>

            <?php } ?>

            <button><a href="http://localhost/distribpc/modules/detailproduit/detail_produit.php?id_produit=<?php echo htmlspecialchars($row['id_produit']); ?>">Plus de details</a></button>
        </div>
    </div>
<?php endwhile; ?>