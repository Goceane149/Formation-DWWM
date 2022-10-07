-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 07 oct. 2022 à 06:14
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vroomissimo`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `IDVoiture` int(11) NOT NULL,
  `id_photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`IDVoiture`, `id_photo`) VALUES
(2, 1),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique`
--

CREATE TABLE `caracteristique` (
  `ID_Caracteristique` int(11) NOT NULL,
  `carroserie` varchar(50) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `type_de_moteur` varchar(50) DEFAULT NULL,
  `siege` int(11) DEFAULT NULL,
  `portes` int(11) DEFAULT NULL,
  `carburant` varchar(50) DEFAULT NULL,
  `cons_carburant` varchar(50) DEFAULT NULL,
  `puissance` varchar(50) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `cylindres` varchar(50) DEFAULT NULL,
  `cylindree` int(11) DEFAULT NULL,
  `vitesse` int(11) DEFAULT NULL,
  `poid_à_vide` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `caracteristique`
--

INSERT INTO `caracteristique` (`ID_Caracteristique`, `carroserie`, `etat`, `type_de_moteur`, `siege`, `portes`, `carburant`, `cons_carburant`, `puissance`, `transmission`, `cylindres`, `cylindree`, `vitesse`, `poid_à_vide`) VALUES
(1, 'SUV/4x4/Pick-Up', 'Occasion', '4x4', 4, 3, 'Essence', '7,3 l/100 km', '63 kW (86 CH)', 'Boîte manuelle', ' 1 328 cm³', 4, 5, '1 075 KG'),
(2, 'berline', 'Occasion', NULL, 5, 4, 'Diesel', '8,5 l/100 km', '171 kW (232 CH)', 'Boîte automatique', ' 2 967 cm³', 6, 6, ' 1 830 kg'),
(3, 'SUV/4x4/Pick-Up', 'Occasion', NULL, 7, 5, 'Essence', NULL, NULL, 'Boîte automatique', NULL, NULL, NULL, NULL),
(4, 'Autres', 'Occasion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

CREATE TABLE `couleurs` (
  `ID_Couleurs` int(11) NOT NULL,
  `Couleur` varchar(50) DEFAULT NULL,
  `style de peinture` varchar(255) DEFAULT NULL,
  `Couleurs_interieur` varchar(50) DEFAULT NULL,
  `interieur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `couleurs`
--

INSERT INTO `couleurs` (`ID_Couleurs`, `Couleur`, `style de peinture`, `Couleurs_interieur`, `interieur`) VALUES
(1, 'Gris', 'Métallisé', 'Gris', 'Tissu'),
(2, 'noir', NULL, NULL, NULL),
(3, 'Gris Amazonite', NULL, NULL, NULL),
(4, 'Blanc', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

CREATE TABLE `description` (
  `id_description` int(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `description`
--

INSERT INTO `description` (`id_description`, `description`) VALUES
(1, 'Caractéristiques1462 CC / 75KW / EURO6D\r\nOPTIONS :\r\nFINITION GL\r\nPEINTURE « MEDIUM GRAY »\r\nGARANTIE USINE 5ANS\r\nTVA DEDUCTIBLE\r\nVOITURE BELGE\r\nNEUF NON IMMATRICULE'),
(2, '3.0 TDI DPF quattro'),
(3, '1.2 PureTech 130ch E6.c Allure S\\u0026S EAT8'),
(4, 'C400 GT');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `Id_equipement` int(11) NOT NULL,
  `confort` longtext,
  `divertissement_medias` longtext,
  `securite` longtext,
  `autre` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`Id_equipement`, `confort`, `divertissement_medias`, `securite`, `autre`) VALUES
(1, 'Climatisation\r\nRétroviseurs latéraux électriques\r\nSièges arrières 1/3 - 2/3\r\nVitres teintées\r\nVitres électriques', 'CD\r\nOrdinateur de bord\r\nRadio', '\r\nABS\r\nAirbag conducteur\r\nAirbag passager\r\nAnti-démarrage\r\nDirection assistée\r\nFeux anti-brouillard\r\nVerrouillage centralisé\r\nVerrouillage centralisé avec télécommande', 'Jantes alliage\r\nPorte-bagages\r\nRoue de secours\r\nRétroviseur intérieur anti-éblouissement automatique'),
(2, 'Accoudoir\r\nAffichage tête haute\r\nAssistant de démarrage en côte\r\nCapteurs d\'aide au stationnement arrière\r\nClimatisation automatique, bi-zone\r\nDétecteur de lumière\r\nDétecteur de pluie\r\nRégulateur de vitesse\r\nRétroviseurs latéraux électriques\r\nSièges arrières 1/3 - 2/3\r\nStart/Stop automatique\r\nVerrouillage centralisé sans clé\r\nVitres teintées\r\nVitres électriques\r\nVolant en cuir\r\nVolant multifonctions', 'Dispositif mains libres\r\nRadio\r\nUSB', 'ABS\r\nAirbag conducteur\r\nAirbag passager\r\nAirbags latéraux\r\nAnti-démarrage\r\nAssistant au freinage d\'urgence\r\nDétection des panneaux routiers\r\nESP\r\nFeux anti-brouillard\r\nIsofix\r\nLED phare de jour\r\nSystème d\'appel d\'urgence\r\nSystème de contrôle de la pression pneus\r\nVerrouillage centralisé\r\nVerrouillage centralisé avec télécommande', 'Jantes alliage\r\nPorte-bagages');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `IDHistorique` int(11) NOT NULL,
  `Kilometrage` varchar(50) DEFAULT NULL,
  `carnet_d_entretien` varchar(50) DEFAULT NULL,
  `vehicule_non_fumeur` varchar(50) DEFAULT NULL,
  `propriétaire prec.` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`IDHistorique`, `Kilometrage`, `carnet_d_entretien`, `vehicule_non_fumeur`, `propriétaire prec.`) VALUES
(1, '7014', 'non', NULL, 1),
(2, '214 000 Km', 'non', NULL, NULL),
(3, '80 442 km', 'non', NULL, NULL),
(4, '1550 km', 'non', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `Id_Localisation` int(11) NOT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `Departement` varchar(50) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `Code_Postal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`Id_Localisation`, `Region`, `Departement`, `Ville`, `Code_Postal`) VALUES
(1, 'wolonnie', NULL, 'Boussu-En-Fagne', 59000),
(2, 'Nord', 'Haut-De-France', 'Roubaix', 59512),
(3, 'Nord', 'Haut-De-France', 'Cambrai', 59400),
(4, 'Nord', 'Haut-De-France', 'Méteren', 59270);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id_photo`, `photo`) VALUES
(1, 'Suzuki_Jimny.png'),
(2, 'Audi_A8.jpg'),
(3, 'Peugeot_5008.jpg'),
(4, 'BM3C400GT.png');

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `id_prix` int(11) NOT NULL,
  `montant` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id_prix`, `montant`) VALUES
(1, '27 950 €'),
(2, '9 000€'),
(3, '26 990 €'),
(4, '6 490€');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `Id_vendeur` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `Telephone` varchar(50) DEFAULT NULL,
  `anciennete` date DEFAULT NULL,
  `Professionel` varchar(3) DEFAULT NULL,
  `id_description` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`Id_vendeur`, `nom`, `prenom`, `Telephone`, `anciennete`, `Professionel`, `id_description`) VALUES
(1, 'dubois', 'john', '07.89.42.18.19.01', '2022-09-01', 'oui', 1),
(2, 'dupont', 'john', '06.85.95.10.14.65', '2022-07-08', 'non', 2),
(3, 'AutoPhere', NULL, '03.27.83.82.31', '2000-05-06', 'oui', 3),
(4, 'Sarl ', 'Mister OCCAZ', '03.66.75.57.34', '2022-05-09', 'oui', 4);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `IDVoiture` int(11) NOT NULL,
  `Marque` varchar(50) DEFAULT NULL,
  `Modele` varchar(50) DEFAULT NULL,
  `Annee_Modele` date DEFAULT NULL,
  `TypeVehicule` varchar(50) DEFAULT NULL,
  `IDHistorique` int(11) DEFAULT NULL,
  `id_prix` int(11) DEFAULT NULL,
  `Id_vendeur` int(11) DEFAULT NULL,
  `ID_Caracteristique` int(11) DEFAULT NULL,
  `Id_equipement` int(11) DEFAULT NULL,
  `ID_Couleurs` int(11) DEFAULT NULL,
  `Id_Localisation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`IDVoiture`, `Marque`, `Modele`, `Annee_Modele`, `TypeVehicule`, `IDHistorique`, `id_prix`, `Id_vendeur`, `ID_Caracteristique`, `Id_equipement`, `ID_Couleurs`, `Id_Localisation`) VALUES
(2, 'Suzuki', 'Jimny', '2013-02-01', '4x4', 1, 1, 1, 1, 1, 1, 1),
(3, 'Audi', 'A8', '2005-08-01', 'Berline', 2, 2, 2, 2, NULL, 1, 2),
(4, 'Peugeot', ' 5008', '2019-03-01', '4x4', 3, 3, 3, 3, 2, 3, 3),
(5, 'BMW', 'C400 GT', '2019-04-01', 'Moto', 4, 4, 4, 4, NULL, 4, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`IDVoiture`,`id_photo`),
  ADD KEY `id_photo` (`id_photo`);

--
-- Index pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  ADD PRIMARY KEY (`ID_Caracteristique`);

--
-- Index pour la table `couleurs`
--
ALTER TABLE `couleurs`
  ADD PRIMARY KEY (`ID_Couleurs`);

--
-- Index pour la table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id_description`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`Id_equipement`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`IDHistorique`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`Id_Localisation`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id_prix`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`Id_vendeur`),
  ADD KEY `id_description` (`id_description`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`IDVoiture`),
  ADD KEY `IDHistorique` (`IDHistorique`),
  ADD KEY `id_prix` (`id_prix`),
  ADD KEY `Id_vendeur` (`Id_vendeur`),
  ADD KEY `ID_Caracteristique` (`ID_Caracteristique`),
  ADD KEY `Id_equipement` (`Id_equipement`),
  ADD KEY `ID_Couleurs` (`ID_Couleurs`),
  ADD KEY `Id_Localisation` (`Id_Localisation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  MODIFY `ID_Caracteristique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `couleurs`
--
ALTER TABLE `couleurs`
  MODIFY `ID_Couleurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `description`
--
ALTER TABLE `description`
  MODIFY `id_description` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `Id_equipement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `IDHistorique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `Id_Localisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id_prix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `Id_vendeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `IDVoiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_ibfk_1` FOREIGN KEY (`IDVoiture`) REFERENCES `voiture` (`IDVoiture`),
  ADD CONSTRAINT `appartenir_ibfk_2` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`id_photo`);

--
-- Contraintes pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD CONSTRAINT `vendeur_ibfk_1` FOREIGN KEY (`id_description`) REFERENCES `description` (`id_description`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`IDHistorique`) REFERENCES `historique` (`IDHistorique`),
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`id_prix`) REFERENCES `prix` (`id_prix`),
  ADD CONSTRAINT `voiture_ibfk_3` FOREIGN KEY (`Id_vendeur`) REFERENCES `vendeur` (`Id_vendeur`),
  ADD CONSTRAINT `voiture_ibfk_4` FOREIGN KEY (`ID_Caracteristique`) REFERENCES `caracteristique` (`ID_Caracteristique`),
  ADD CONSTRAINT `voiture_ibfk_5` FOREIGN KEY (`Id_equipement`) REFERENCES `equipement` (`Id_equipement`),
  ADD CONSTRAINT `voiture_ibfk_6` FOREIGN KEY (`ID_Couleurs`) REFERENCES `couleurs` (`ID_Couleurs`),
  ADD CONSTRAINT `voiture_ibfk_7` FOREIGN KEY (`Id_Localisation`) REFERENCES `localisation` (`Id_Localisation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
