<?php
include('C:/xampp/htdocs/distribpc/modules/recherche_tout_produit/affiche_maxprice/remplir_maxprice.php');
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <input type="range" name='prix' min='0' max='<?php echo htmlspecialchars($row['prix'] + 10); ?>' step='10' value="0" class='filtre_prix'>
<?php endwhile; ?>