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