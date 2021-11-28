<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/data_dashboard/nombre_peripheriques/requete_produit.php");
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>


    <tr class='row'>
        <td><?php echo htmlspecialchars($row['num_reference']); ?></td>
        <td><?php echo htmlspecialchars($row['nom_categorie']); ?></td>
        <td><?php echo htmlspecialchars($row['nom_souscategorie']); ?></th>
        <td><?php echo htmlspecialchars($row['nom_produit']); ?></td>
        <td><?php echo htmlspecialchars($row['marque']); ?></td>
        <td><?php echo htmlspecialchars($row['prix']); ?></td>
        <td><?php echo htmlspecialchars($row['disponible']); ?></td>
        <?php
        if (htmlspecialchars($row['promo']) == 'true') { ?>

            <td class='success'>En promo</td>

        <?php } else { ?>

            <td class='danger'>Pas de promo</td>

        <?php } ?>

        <?php
        if (!empty(htmlspecialchars($row['pourcentage_promo']))) { ?>

            <td class='success'><?php echo htmlspecialchars($row['pourcentage_promo']); ?></td>

        <?php } else { ?>

            <td>NULL</td>

        <?php } ?>

        <td><?php echo htmlspecialchars($row['garantit']); ?></td>

    <?php endwhile; ?>
    </table>
    <?php
    echo '<p align="center" class="pagination"> '; //Pour l'affichage, on centre la liste des pages
    for ($i = 1; $i <= $nombreDePages; $i++) //On fait notre boucle
    {
        //On va faire notre condition
        if ($i == $pageActuelle) //Si il s'agit de la page actuelle...
        {
            echo ' [ ' . $i . ' ] ';
        } else //Sinon...
        {
            echo ' <a href="http://localhost/distribpc/webadmin/modules/data_dashboard/data_details/peripherique.php?page=' . $i . '">' . $i  . '</a> ';
        }
    }
    echo '</p>';

    ?>