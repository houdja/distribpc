<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/best_seller/requete.php");
?>

<?php ($row = $stmt->fetch(PDO::FETCH_ASSOC))  ?>

<div class="card">
    <h1 class="number"><?php echo $count; ?></h1>
    <p>produits</p>
    <p>Etant <br> <span class="en_avant">best sellers</span></p>
    <button><a href="http://localhost/distribpc/webadmin/modules/data_dashboard/data_details/best_seller.php">Plus de details</a></button>
</div>