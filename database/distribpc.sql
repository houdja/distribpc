DROP DATABASE IF EXISTS distribpc;

CREATE DATABASE distribpc;

/* CREATE ALL TABLES */

CREATE TABLE `categorie` (
  `id_categorie` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nom_categorie` varchar(50) DEFAULT NULL,
  `image_categorie` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produits` (
  `id_produit` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  `meilleur_vente` varchar(100) DEFAULT NULL,
  `nom_produit` varchar(1000) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `description_courte` varchar(20) DEFAULT NULL,
  `num_reference` int(11) DEFAULT NULL,
  `disponible` varchar(10) DEFAULT NULL,
  `promo` varchar(10) DEFAULT NULL,
  `pourcentage_promo` int(11) DEFAULT NULL,
  `garantit` varchar(100) DEFAULT 'sans garantit',
  `image_produit` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `souscategorie` (
  `id_souscategorie` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_categorie` int NOT NULL,
  `nom_souscategorie` varchar(100) DEFAULT NULL,
  `image_souscategorie` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* ADD FOREIGN KEY */

ALTER TABLE `produits`
ADD CONSTRAINT FK_produits_categorie 
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie);

ALTER TABLE `produits`
ADD CONSTRAINT FK_produits_souscategorie 
FOREIGN KEY (id_souscategorie) REFERENCES souscategorie(id_souscategorie);

ALTER TABLE `souscategorie`
ADD CONSTRAINT FK_souscategorie_categorie
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie);


/* INSERT VALUES INTO TABLES */

/* TABLE categorie */
INSERT INTO categorie VALUES ('', 'Ordinateurs', 'ordinateur.png');
INSERT INTO categorie VALUES ('', 'Composants', 'composant.jpg');
INSERT INTO categorie VALUES ('', 'Périphériques', 'peripheriques.png');

/* TABLE souscategorie */
INSERT INTO souscategorie VALUES ('', '1', 'Ordi fixe','pc_fixe4.jpg');
INSERT INTO souscategorie VALUES ('', '1', 'Ordi portable','pc_portable4.jfif');
INSERT INTO souscategorie VALUES ('', '2', 'Ecran','ecran6.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'Casque','casque3.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'Clavier','clavier2.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'Souris','souris3.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'Micro','micro1.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'Enceinte','enceinte2.jpg');
INSERT INTO souscategorie VALUES ('', '2', 'RAM','memoire2.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Processeur','processeur2.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Carte mere','carte_mere2.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Carte graphique','carte_graphique3.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Alimentation','alimentation3.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Refroidissent','refroidissent1.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Mémoire','stockage_ex1.jpg');
INSERT INTO souscategorie VALUES ('', '3', 'Boitier','boitier5.jpg');

/* TABLE produits */

INSERT INTO produits (`id_produit`, `id_categorie`, `id_souscategorie`, `marque`, `nom_produit`, `prix`, `description_courte`, `description`, `num_reference`, `disponible`, `meilleur_vente`, `promo`, `pourcentage_promo`, `garantit`, `image_produit`)
VALUES ('', '1', '1','Distribpc','Dynamite','1549','Avec un Ryzen 7 3700X et une GeForce RTX 3060 sous le capot, on peut clairement...',"Avec un Ryzen 7 3700X et une GeForce RTX 3060 sous le capot, on peut clairement affirmer que ce PC Dynamite n'est pas là pour trier les lentilles ! Une machine capable du meilleur en HD comme en 2K, et avec beaucoup de classe.",1234,'disponible', '','','','3ans','pc_fixe4.jpg');

INSERT INTO produits (`id_produit`, `id_categorie`, `id_souscategorie`, `marque`, `nom_produit`, `prix`, `description_courte`, `description`, `num_reference`, `disponible`, `meilleur_vente`, `promo`, `pourcentage_promo`, `garantit`, `image_produit`)
VALUES ('', '1', '2','MSI','MSI GS66 Stealth','2019','Le PC Portable MSI GS66 Stealth 10UE-214FR fait partie des premiers portables à accueillir la nouvelle génération de carte NVIDIA Ampere.',"Le PC Portable MSI GS66 Stealth 10UE-214FR fait partie des premiers portables à accueillir la nouvelle génération de carte NVIDIA Ampere. Il vous propose une configuration qui se dote ainsi d'une RTX 3060, accompagnée par un processeur Intel Core i7 Comet Lake, 16 Go de RAM et un stockage ultra réactif de 1 To au format SSD. Une véritable machine à jouer qui, avec son écran IPS 300 Hz, devrait vous en mettre plein les yeux !",1235,'disponible', 'true','','','3ans','pc_portable4.jfif');

INSERT INTO `produits` (`id_produit`, `id_categorie`, `id_souscategorie`, `marque`, `nom_produit`, `prix`, `description_courte`, `description`, `num_reference`, `disponible`, `meilleur_vente`, `promo`, `pourcentage_promo`, `garantit`, `image_produit`) 
VALUES (NULL, '2', '3', 'Samsung', 'Odyssey G3 S24AG300NU', '199', 'Les écrans PC Samsung Odyssey représentent une association entre un design futuriste et une performance certaine', 'Les écrans PC Samsung Odyssey représentent une association entre un design futuriste et une performance certaine pour vous accompagner dans votre quotidien de gamer. Avec sa dalle en technologie VA cadencée à 144 Hz et sa résolution Full HD, vous avez trouvé le partenaire de votre immersion dans vos jeux favoris !', '1236', 'disponible', 'true', NULL, NULL, '2ans', 'ecran2.jpg');