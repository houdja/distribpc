<?php
include("C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/modules/detailproduit/suggestion/requete.php");
$counter = 0;
?>

<?php if ($count > 1) { ?>

    <section class="suggestion success">
        <div class="container">
            <h1>Produit<?php echo $count > 2 ? 's' : '' ?> similaires</h1>
            <div class="contain_card">
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <?php if (htmlspecialchars($row['id_produit']) != $_GET['id_produit'] && $counter <= 4) { ?>
                        <div class="card">
                            <img src="http://localhost/distribpc/img/<?php echo htmlspecialchars($row['image_produit']); ?>" alt="<?php echo htmlspecialchars($row['nom_produit']); ?>" class='card_pic'>
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
                    <?php } ?>
                <?php $counter++;
                endwhile; ?>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="suggestion danger">
        <div class="container">
            <h1>SUGGESTIONS</h1>
            <p>Il semblerait qu'il n'y ait pas de suggestion pour ce produit.</p>
        </div>
    </section>
<?php } ?>