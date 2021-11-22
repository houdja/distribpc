<?php
include('C:/xampp/htdocs/distribpc/modules/recherche_composant/remplir_marque/remplir_marque.php');
?>

<select name="marque">
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <option value="<?php echo htmlspecialchars($row['marque']); ?>"><?php echo htmlspecialchars($row['marque']); ?></option>
        <?php endwhile; ?>
</select>