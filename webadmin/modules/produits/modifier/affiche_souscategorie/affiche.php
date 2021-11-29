<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_souscategorie/requete.php");
?>



<?php while ($rowtout = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
<?php
if(htmlspecialchars($rowtout['nom_souscategorie']) != $souscategorieActuel ){ ?>

<option value="<?php echo htmlspecialchars($rowtout['id_souscategorie']); ?>"><?php echo htmlspecialchars($rowtout['nom_souscategorie']); ?></option>

<?php } ?>

<?php endwhile; ?>
