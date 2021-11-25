<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/ajouter/affiche_souscategorie/requete.php");
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>


    <td></td>
    <option value="<?php echo htmlspecialchars($row['id_souscategorie']); ?>"><?php echo htmlspecialchars($row['nom_souscategorie']); ?></option>



<?php endwhile; ?>