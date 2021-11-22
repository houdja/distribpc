<?php
include('C:/xampp/htdocs/distribpc/modules/affiche_souscategorie/peripherique/requete_peripherique.php');
?>

<ul>
    <a href="http://localhost/distribpc/peripherique.php">Périphériques</a>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <li><a href="#"> <?php echo htmlspecialchars($row['nom_souscategorie']); ?></a></li>
    <?php endwhile; ?>
</ul>