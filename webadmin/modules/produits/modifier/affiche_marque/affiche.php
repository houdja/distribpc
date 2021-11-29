<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_marque/requete.php");
?>



<?php while ($rowtout = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

  <?php
  if (htmlspecialchars($rowtout['nom_marque']) != $marqueActuel) { ?>

    <option value="<?php echo htmlspecialchars($rowtout['nom_marque']); ?>"><?php echo htmlspecialchars($rowtout['nom_marque']); ?></option>

  <?php } ?>

<?php endwhile; ?>