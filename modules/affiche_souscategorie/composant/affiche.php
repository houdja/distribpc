<?php
include('C:/xampp/htdocs/distribpc/modules/affiche_souscategorie/composant/requete_composant.php');
?>

<ul>
    <a href="http://localhost/distribpc/composant.php">Composant</a>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <li><a href="#"> <?php echo htmlspecialchars($row['nom_souscategorie']); ?></a></li>
    <?php endwhile; ?>
</ul>