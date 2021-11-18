<?php
require_once('C:\xampp\htdocs\distribpc\component\header.php');
require_once('C:\xampp\htdocs\distribpc\component\navbar.php');
?>
<?php
include("C:/xampp/htdocs/distribpc/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/modules/detailproduit/requete_detail.php");
?>

<section class='detail'>
  <div class="container">
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

      <img src="http://localhost/distribpc/img/<?php echo htmlspecialchars($row['image_produit']); ?>" alt="<?php echo htmlspecialchars($row['nom_produit']); ?>" class='detail_pic'>

      <div class="info">


        <h1><?php echo htmlspecialchars($row['marque']); ?> <br> <?php echo htmlspecialchars($row['nom_produit']); ?></h1>

        <p class='description'><?php echo htmlspecialchars($row['description']); ?></p>
        <?php
        $prix = htmlspecialchars($row['prix']);
        $pourcentage = htmlspecialchars($row['pourcentage_promo']);
        if (htmlspecialchars($row['promo']) === 'true') { ?>

          <p class='promo'>Promotion -<?php echo htmlspecialchars($row['pourcentage_promo']); ?> %</p>

          <p class='prix_barre'><?php echo $prix ?> €</p>
          <p class='prix_promo'><?php echo $prix - ($prix * $pourcentage / 100) ?> €</p>

        <?php } else { ?>

          <p class='prix'><?php echo $prix ?> €</p>

        <?php } ?>

        <p class='garantit'>Garantit <?php echo htmlspecialchars($row['garantit']); ?></p>

        <?php
        if (htmlspecialchars($row['disponible']) === 'disponible') { ?>

          <p class='disponible'>Disponible</p>

        <?php } else { ?>

          <p class='disponible'>Non disponible</p>

        <?php } ?>



      </div>

    <?php endwhile; ?>
  </div>
</section>

<?php
require_once('C:\xampp\htdocs\distribpc\component\footer.php');
?>