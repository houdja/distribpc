<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_marque/requete.php");
?>

<?php while ($rowtout = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>


    <option value="<?php echo htmlspecialchars($rowtout['nom_marque']); ?>"><?php echo htmlspecialchars($rowtout['nom_marque']); ?></option>



<?php endwhile; ?>