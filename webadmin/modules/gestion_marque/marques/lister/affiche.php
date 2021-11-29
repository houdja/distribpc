<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/gestion_marque/marques/lister/requete.php");
?>

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>


  <tr class='row'>
    <td><?php echo htmlspecialchars($row['nom_marque']); ?></td>
    <td><a href="http://localhost/distribpc/webadmin/modules/gestion_marque/marques/modifier/modification_marque.php?id_marque=<?php echo htmlspecialchars($row['id_marque']); ?>"><img src="https://img.icons8.com/officexs/16/000000/edit.png" /></a></td>
    <td><a href="http://localhost/distribpc/webadmin/modules/gestion_marque/marques/supprimer/traitement_suppresion.php?id_marque=<?php echo htmlspecialchars($row['id_marque']); ?>"><img src="https://img.icons8.com/ultraviolet/16/000000/trash.png" /></a></td>
  </tr>

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
    echo ' <a href="http://localhost/distribpc/webadmin/marque.php?page=' . $i . '">' . $i  . '</a> ';
  }
}
echo '</p>';

?>