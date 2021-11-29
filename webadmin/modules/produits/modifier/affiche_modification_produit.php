<?php

include("C:/xampp/htdocs/distribpc/webadmin/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/requete_recup_produit.php");


$row = $stmt->fetch(PDO::FETCH_ASSOC)
?>

<input type="hidden" name="id_produit" value="<?php echo htmlspecialchars($row['id_produit']); ?>">

<input type="text" name="num_ref" placeholder="N° réference" value="<?php echo htmlspecialchars($row['num_reference']); ?>">

<div class="dual">
  <select name="marque">
    <option value="<?php echo htmlspecialchars($row['marque']) ?>"><?php echo htmlspecialchars($row['marque']) ?></option>
    <?php $marqueActuel = htmlspecialchars($row['marque']) ?>
    <?php
    require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_marque/affiche.php') ?>
  </select>
  <input type="text" name="nom_produit" placeholder="Nom du produit" value="<?php echo htmlspecialchars($row['nom_produit']); ?>">
</div>



<div class="dual">
  <input type="text" name="prix" placeholder="Prix" value="<?php echo htmlspecialchars($row['prix']); ?>">
  <select name="meilleur_v">
    <?php if (htmlspecialchars($row['meilleur_vente']) == "true") { ?>

      <option value="true">Meilleures ventes</option>
      <option value="NULL">Aucun</option>

    <?php } else { ?>

      <option value="NULL">Aucun</option>
      <option value="true">Meilleures ventes</option>

    <?php } ?>

  </select>
</div>



<!-- PROBLEME REGLER  -->

<div class="dual">
  <select name="categorie">
    <option value="<?php echo htmlspecialchars($row['id_categorie']) ?>"><?php echo htmlspecialchars($row['nom_categorie']) ?></option>
    <?php $categorieActuel = htmlspecialchars($row['nom_categorie']) ?>
    <?php
    require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_categorie/affiche.php') ?>
  </select>
  <select name="souscategorie">
    <option value="<?php echo htmlspecialchars($row['id_souscategorie']) ?>"><?php echo htmlspecialchars($row['nom_souscategorie']) ?></option>
    <?php $souscategorieActuel = htmlspecialchars($row['nom_souscategorie']) ?>
    <?php
    require_once('C:/xampp/htdocs/distribpc/webadmin/modules/produits/modifier/affiche_souscategorie/affiche.php') ?>
  </select>
</div>


<!-- ***************** -->

<div class="dual">
  <select name="dispo">
    <?php if (htmlspecialchars($row['disponible']) == "disponible") { ?>

      <option value="disponible">Disponible</option>
      <option value="pas dispo">Indisponible</option>

    <?php } else { ?>

      <option value="pas dispo">Indisponible</option>
      <option value="disponible">Disponible</option>

    <?php } ?>
  </select>
  <input type="text" name="garantit" placeholder="Garantit" value="<?php echo htmlspecialchars($row['garantit']); ?>">
</div>

<div class="dual">

  <select name="promo">
    <?php if (htmlspecialchars($row['promo']) == "true") { ?>

      <option value="true">Promo</option>
      <option value="NULL">Pas en promo</option>

    <?php } else { ?>

      <option value="NULL">Pas en promo</option>
      <option value="true">Promo</option>

    <?php } ?>
  </select>

  <input type="text" name='pourcentage_promo' placeholder="% Promo" value="<?php echo htmlspecialchars($row['pourcentage_promo']); ?>">
</div>


<input type="file" name="image_produit" value="<?php echo htmlspecialchars($row['image_produit']); ?>" required>

<textarea name="descr_c" cols="30" rows="5" placeholder="Description courte" maxlength="50" class="desc_c"><?php echo htmlspecialchars($row['description_courte']); ?></textarea>
<textarea name="descr_l" cols="30" rows="10" placeholder="Description longue"><?php echo htmlspecialchars($row['description']); ?></textarea>