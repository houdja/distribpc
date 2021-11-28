<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_composants/requete.php");
?>

<?php ($row = $stmt->fetch(PDO::FETCH_ASSOC))  ?>

<div class="card">
    <h1 class="number"><?php echo $count; ?></h1>
    <p>produits</p>
    <p>Appartenant à la categorie <span class="en_avant"><?php echo htmlspecialchars($row['nom_categorie']); ?></span></p>
    <button><a href="http://localhost/distribpc/webadmin/modules/data_dashboard/data_details/composant.php">Plus de details</a></button>
</div>