<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/gestion_marque/marques/modifier/requete_recup_marque.php");


$row = $stmt->fetch(PDO::FETCH_ASSOC)
?>

<input type="hidden" name="id_marque" value="<?php echo htmlspecialchars($row['id_marque']); ?>">
<input type="text" name="nom_marque" value="<?php echo htmlspecialchars($row['nom_marque']); ?>">
