-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 14 Novembre 2015 à 17:54
-- Version du serveur :  10.0.17-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `oueslatirami`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(8) NOT NULL,
  `nom_agence` varchar(250) NOT NULL,
  `adresse_agence_l1` varchar(250) NOT NULL,
  `adresse_agence_l2` varchar(250) NOT NULL,
  `cp_agence` varchar(50) NOT NULL,
  `ville_agence` varchar(250) NOT NULL,
  `pays_agence` varchar(250) NOT NULL,
  `logo_agence` varchar(500) NOT NULL,
  `actif_agence` tinyint(4) NOT NULL DEFAULT '1',
  `expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`id`, `nom_agence`, `adresse_agence_l1`, `adresse_agence_l2`, `cp_agence`, `ville_agence`, `pays_agence`, `logo_agence`, `actif_agence`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 'locatest', 'locatest adresse 1', 'locatest adresse 2', '81100', 'Castres', 'France', 'logo.jpg', 1, NULL, '2015-09-23 00:00:00', NULL),
(2, 'localtest2', 'localtest2', 'localtest2', '06210', 'localtest2', 'localtest2', 'localtest2', 1, NULL, '2015-09-28 00:00:00', NULL),
(5, 'Nom agence', 'Adresse agence l1', 'Adresse agence l2', 'Cp agence', 'Ville agence', 'Pays agence', 'Logo agence', 1, NULL, '2015-11-10 16:08:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `avoir_contrat`
--

CREATE TABLE `avoir_contrat` (
  `id_vehicule` int(11) NOT NULL,
  `id_contrat` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(250) NOT NULL,
  `desc_categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`, `desc_categorie`) VALUES
(1, 'categorieLocaltest', 'description categorieLocaltest');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `prenom_client` varchar(250) NOT NULL,
  `nom_client` varchar(250) NOT NULL,
  `sex_client` varchar(25) NOT NULL,
  `mail_client` varchar(250) NOT NULL,
  `tel_client` varchar(100) NOT NULL,
  `login_client` varchar(250) NOT NULL,
  `mdp_client` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `num_contrat` varchar(250) NOT NULL,
  `date_contrat` date NOT NULL,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `km_depart` double NOT NULL,
  `km_arrive` double NOT NULL,
  `prix_journalier` double NOT NULL,
  `montant_accompte` double NOT NULL,
  `expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom_entreprise` varchar(250) NOT NULL,
  `raison_social_entreprise` varchar(250) NOT NULL,
  `adresse_entreprise_l1` varchar(250) DEFAULT NULL,
  `adresse_entreprise_l2` varchar(250) DEFAULT NULL,
  `cp_entreprise` varchar(25) DEFAULT NULL,
  `ville_entreprise` varchar(250) DEFAULT NULL,
  `pays_entreprise` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_entreprise`, `raison_social_entreprise`, `adresse_entreprise_l1`, `adresse_entreprise_l2`, `cp_entreprise`, `ville_entreprise`, `pays_entreprise`) VALUES
(1, 'Nom', 'Sarl', 'Adresse1', 'Adresse2', '81100', 'Castres', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `nom_equipement` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`id`, `nom_equipement`) VALUES
(1, 'Climatisation'),
(2, 'Air bag'),
(3, 'Gps'),
(4, 'Régulateur de vitesse'),
(5, 'Jantes alu'),
(6, 'Radar de recul'),
(7, 'Hares antibrouillard'),
(8, 'Intérieur cuir'),
(9, 'Volant multifonction'),
(10, 'Abs'),
(11, 'Esp'),
(12, 'Vitres électriques'),
(13, 'Ordinateur de bord'),
(14, 'Camèra de recul'),
(15, 'Toit panoramique'),
(16, 'Startstop'),
(17, 'Isofix'),
(18, 'Siéges chauffants');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `num_facture` varchar(250) NOT NULL,
  `date_facture` date NOT NULL,
  `total_ht_facture` double NOT NULL,
  `total_ttc_facture` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

CREATE TABLE `louer` (
  `id_client` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom_marque` varchar(250) NOT NULL,
  `desc_marque` text,
  `expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `nom_marque`, `desc_marque`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 'Porshe', 'Description Porche', NULL, '2015-09-30 00:00:00', NULL),
(2, 'Renault', 'Renault', NULL, '2015-11-14 00:19:31', NULL),
(3, 'Peugeot', 'Peugeot', NULL, '2015-11-14 12:00:56', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `id` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `denomination_modele` varchar(250) DEFAULT NULL,
  `desc_modele` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`id`, `id_marque`, `denomination_modele`, `desc_modele`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cliot', 'Cliot description', '2015-09-30 00:00:00', NULL),
(2, 1, 'Cayenne', 'Cayenne description', '2015-11-11 00:00:00', NULL),
(3, 3, '207', '207 description', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `num_reservation` varchar(250) NOT NULL,
  `date_reservation` date NOT NULL,
  `date_deb_reservation` date DEFAULT NULL,
  `date_fin_reservation` date DEFAULT NULL,
  `nb_jour_reservation` double NOT NULL,
  `mnt_arrhes_reservation` float DEFAULT NULL,
  `expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `num_reservation`, `date_reservation`, `date_deb_reservation`, `date_fin_reservation`, `nb_jour_reservation`, `mnt_arrhes_reservation`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 'TestNumRes', '2015-10-22', '2015-10-15', '2015-10-31', 15, 150, NULL, '2015-10-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE `reserver` (
  `id_reservation` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nom_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `nom_role`) VALUES
(1, 'ROLE_USER'),
(2, 'ROLE_ADMIN'),
(3, 'ROLE_SUPER_ADMIN'),
(4, 'ROLE_EMPLOYE_AGENCE'),
(5, 'ROLE_CHEF_AGENCE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `id_agence` int(11) NOT NULL,
  `nom_utilisateur` varchar(200) NOT NULL,
  `prenom_utilisateur` varchar(200) NOT NULL,
  `email_utilisateur` varchar(255) NOT NULL,
  `login_utilisateur` varchar(255) NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `salt` varchar(32) DEFAULT NULL,
  `dt_naissance_utilisateur` date NOT NULL,
  `actif_utilisateur` tinyint(1) NOT NULL,
  `expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `id_agence`, `nom_utilisateur`, `prenom_utilisateur`, `email_utilisateur`, `login_utilisateur`, `mdp_utilisateur`, `salt`, `dt_naissance_utilisateur`, `actif_utilisateur`, `expire_at`, `created_at`, `updated_at`) VALUES
(110, 2, 'Oueslati', 'Rami', 'ramisg85@gmail.com', 'rami', '62ff4e8728ce5ee84e2e5c4c33c857576cc918f829850183ff1d879d882da0f519178fa6d6933a114444f84c217cbfe33b399d82c03d11e10c44c08db23dce5a', 'de73cf17eb6a8b6ceb59d7f44f5baffa', '2015-04-19', 1, NULL, '2015-04-19 23:21:16', NULL),
(112, 2, 'Oueslati', 'Adam', 'adamsg85@gmail.com', 'adam', '754408ba5ae753ef8eabc9b471402d21446cf408d000cb804c871a7d18423048c44ffbc58edd43fe3c0ccd73282a1fb4afac37396edd97169ade749aa6fc29c4', 'afbdf97544fb358c03ef1d9b7317c352', '2015-08-17', 1, NULL, '2015-08-17 12:14:31', NULL),
(114, 2, 'test', 'test', 'test@test.fr', 'test', '4759bc407a0fccc9348bb1b462d53471e0b1083a57494fe6133607658993e7a1cf93038ba214140a188d7c2443e3f9d093886570e27d02c01ecd4e1a357d70cb', 'ca445f1d127e5f9b51f2e9a695237ed2', '2015-11-27', 1, NULL, '2015-11-10 10:26:42', NULL),
(115, 5, 'Test2', 'Test2', 'test@test.fr', 'Test2', 'ec197550fe590e6c42c84eb5b1b3ee5987bc9f639ae0ff6706ca624bd20784ec77a11329d3dedb79f207684673c96e50c546a7573726805625ea9795958c25f1', 'cf615a126e0eb9d70653bb024402da62', '2015-11-20', 1, NULL, '2015-11-14 14:40:14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_role`
--

CREATE TABLE `utilisateur_role` (
  `utilisateur_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur_role`
--

INSERT INTO `utilisateur_role` (`utilisateur_id`, `role_id`) VALUES
(110, 1),
(110, 2),
(110, 3),
(112, 1),
(112, 2),
(112, 3),
(114, 1),
(114, 2),
(114, 3),
(115, 1),
(115, 2),
(115, 3);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `num_immat_vehicule` varchar(250) NOT NULL,
  `type_vehicule` varchar(250) NOT NULL,
  `tarif_journalier` double NOT NULL,
  `date_mise_circulation_vehicule` date NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_modele` int(11) NOT NULL,
  `id_agence` int(8) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `num_immat_vehicule`, `type_vehicule`, `tarif_journalier`, `date_mise_circulation_vehicule`, `id_categorie`, `id_modele`, `id_agence`, `created_at`, `updated_at`) VALUES
(1, '06ATGF1254', 'typelocaltest', 95, '2015-09-16', 1, 1, 1, '2015-09-30 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule_equipement`
--

CREATE TABLE `vehicule_equipement` (
  `vehicule_id` int(11) NOT NULL,
  `equipement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avoir_contrat`
--
ALTER TABLE `avoir_contrat`
  ADD PRIMARY KEY (`id_vehicule`,`id_contrat`,`id_client`),
  ADD KEY `avoir_fk` (`id_vehicule`),
  ADD KEY `avoir2_fk` (`id_contrat`),
  ADD KEY `avoir3_fk` (`id_client`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `travaille_chez_fk` (`id_entreprise`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `correspondre_fk` (`id_facture`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `louer`
--
ALTER TABLE `louer`
  ADD PRIMARY KEY (`id_client`,`id_vehicule`),
  ADD KEY `louer_fk` (`id_client`),
  ADD KEY `louer2_fk` (`id_vehicule`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rassemble_fk` (`id_marque`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_reservation`,`id_vehicule`,`id_client`),
  ADD KEY `reserver_fk` (`id_reservation`),
  ADD KEY `reserver2_fk` (`id_vehicule`),
  ADD KEY `reserver3_fk` (`id_client`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3AF6CDF03` (`login_utilisateur`),
  ADD KEY `affecter_fk` (`id_agence`),
  ADD KEY `id_agence` (`id_agence`);

--
-- Index pour la table `utilisateur_role`
--
ALTER TABLE `utilisateur_role`
  ADD PRIMARY KEY (`utilisateur_id`,`role_id`),
  ADD KEY `IDX_9EE8E650FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_9EE8E650D60322AC` (`role_id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriser_dans_fk` (`id_categorie`),
  ADD KEY `est_present_dans_fk` (`id_agence`),
  ADD KEY `appartenir_fk` (`id_modele`);

--
-- Index pour la table `vehicule_equipement`
--
ALTER TABLE `vehicule_equipement`
  ADD PRIMARY KEY (`vehicule_id`,`equipement_id`),
  ADD KEY `equiper_fk` (`vehicule_id`),
  ADD KEY `equiper2_fk` (`equipement_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avoir_contrat`
--
ALTER TABLE `avoir_contrat`
  ADD CONSTRAINT `fk_avoir` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `fk_avoir2` FOREIGN KEY (`id_contrat`) REFERENCES `contrat` (`id`),
  ADD CONSTRAINT `fk_avoir3` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_travaille_chez` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `fk_correspondre` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id`);

--
-- Contraintes pour la table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `fk_louer` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_louer2` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id`);

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `fk_rassemble` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `fk_reserver` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `fk_reserver2` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `fk_reserver3` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_gerer` FOREIGN KEY (`id_agence`) REFERENCES `agence` (`id`);

--
-- Contraintes pour la table `utilisateur_role`
--
ALTER TABLE `utilisateur_role`
  ADD CONSTRAINT `FK_9EE8E650D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9EE8E650FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `fk_appartenir` FOREIGN KEY (`id_modele`) REFERENCES `modele` (`id`),
  ADD CONSTRAINT `fk_categoriser_dans` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `fk_est_present_dans` FOREIGN KEY (`id_agence`) REFERENCES `agence` (`id`);

--
-- Contraintes pour la table `vehicule_equipement`
--
ALTER TABLE `vehicule_equipement`
  ADD CONSTRAINT `vehicule_equipement_fk1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `vehicule_equipement_fk2` FOREIGN KEY (`equipement_id`) REFERENCES `equipement` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
