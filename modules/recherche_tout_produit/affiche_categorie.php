<?php
include('C:/xampp/htdocs/distribpc/modules/recherche_tout_produit/remplir_categorie.php');
?>

<select name="categorie">
<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <option value="<?php echo htmlspecialchars($row['id_souscategorie']); ?>"><?php echo htmlspecialchars($row['nom_souscategorie']); ?></option>
<?php endwhile; ?>
</select>
