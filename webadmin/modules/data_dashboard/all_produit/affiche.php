<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/all_produit/requete.php");
?>

<?php ($row = $stmt->fetch(PDO::FETCH_ASSOC))  ?>


<p> <span> <?php echo $count; ?> </span> produits dont</p>