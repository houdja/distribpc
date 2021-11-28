<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/promotion/requete.php");
?>

<?php ($row = $stmt->fetch(PDO::FETCH_ASSOC))  ?>

<div class="card">
    <h1 class="number"><?php echo $count; ?></h1>
    <p>produits</p>
    <p><span class="en_avant">en promotion</span></p>
    <button><a href="http://localhost/distribpc/webadmin/modules/data_dashboard/data_details/promotion.php">Plus de details</a></button>
</div>