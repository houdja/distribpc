<?php
include('C:/xampp/htdocs/distribpc/modules/affiche_souscategorie/ordinateur/requete_ordinateur.php');
?>

<ul>
    <a href="#">Ordinateurs</a>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <li><a href="#"> <?php echo htmlspecialchars($row['nom_souscategorie']); ?></a></li>
    <?php endwhile; ?>
</ul>