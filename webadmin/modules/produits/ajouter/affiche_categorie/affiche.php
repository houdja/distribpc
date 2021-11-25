<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_categorie/requete.php");
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>


    <td></td>
    <option value="<?php echo htmlspecialchars($row['id_categorie']); ?>"><?php echo htmlspecialchars($row['nom_categorie']); ?></option>



<?php endwhile; ?>