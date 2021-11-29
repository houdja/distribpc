<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_categorie/requete.php");
?>



<?php while ($rowtout = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
  <?php
  if (htmlspecialchars($rowtout['nom_categorie']) != $categorieActuel) { ?>

    <option value="<?php echo htmlspecialchars($rowtout['id_categorie']); ?>"><?php echo htmlspecialchars($rowtout['nom_categorie']); ?></option>

  <?php } ?>

<?php endwhile; ?>