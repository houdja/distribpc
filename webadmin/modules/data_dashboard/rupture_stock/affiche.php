<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/rupture_stock/requete.php");
?>

<?php ($row = $stmt->fetch(PDO::FETCH_ASSOC))  ?>

<div class="card">
    <h1 class="number"><?php echo $count; ?></h1>
    <p>produits</p>
    <p>Etant <br> <span class="en_avant">en rupture de stock</span></p>
    <button><a href="#">Plus de details</a></button>
</div>