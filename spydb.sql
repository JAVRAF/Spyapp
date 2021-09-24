-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 sep. 2021 à 16:29
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `roles`, `password`) VALUES
(1, 'user@spyapp.org', '[\"ROLE_USER\"]', '$2y$13$2K.uNDqUkpRoiosz5r3gyOLpTpVBoJ65SSib5DuTCESqPmUw2tR7u'),
(3, 'test@spyapp.org', '[\"ROLE_ADMIN\"]', '$2y$13$Ras.tvFRLN/dnpp7DTFTPe6zQQxbxfrskyJa5QAKA3IfT32EQoXbG');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `id_code` int(11) NOT NULL,
  `current_mission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `nationality_id`, `name`, `surname`, `dob`, `id_code`, `current_mission_id`) VALUES
(1, 2, 'Bond', 'James', '1968-03-02', 7, 2),
(2, 3, '47', 'Agent', '1964-09-05', 47, 1),
(3, 1, 'Bonnisseur de la Batte', 'Hubert', '1972-06-19', 117, 2),
(4, 4, 'Zeni', 'Luisa', '1896-01-01', 189, 14);

-- --------------------------------------------------------

--
-- Structure de la table `agent_specialty`
--

CREATE TABLE `agent_specialty` (
  `agent_id` int(11) NOT NULL,
  `specialty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agent_specialty`
--

INSERT INTO `agent_specialty` (`agent_id`, `specialty_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `nationality_id` int(11) DEFAULT NULL,
  `current_mission_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `id_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `asset`
--

INSERT INTO `asset` (`id`, `nationality_id`, `current_mission_id`, `name`, `surname`, `dob`, `id_code`) VALUES
(1, 1, 1, 'Aindique', 'Bernard', '1963-06-05', 496),
(2, 4, 2, 'Boccaperta', 'Giani', '1957-07-10', 185),
(3, 5, 3, 'Hockenheim', 'Siegfried', '1965-08-29', 394),
(14, 6, 14, 'Zeng', 'Fu', '1974-08-25', 586);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `name`, `nationality`) VALUES
(1, 'France', 'French'),
(2, 'Great Britain', 'British'),
(3, 'United States of America', 'American'),
(4, 'Italy', 'Italian'),
(5, 'Germany', 'German'),
(6, 'China', 'Chinese');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210826153723', '2021-08-26 17:37:38', 288),
('DoctrineMigrations\\Version20210826163259', '2021-08-26 18:33:25', 199),
('DoctrineMigrations\\Version20210827101851', '2021-08-27 12:19:05', 2310),
('DoctrineMigrations\\Version20210827103731', '2021-08-27 12:37:39', 6754),
('DoctrineMigrations\\Version20210827104626', '2021-08-27 12:46:31', 826);

-- --------------------------------------------------------

--
-- Structure de la table `hideout`
--

CREATE TABLE `hideout` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `mission_id` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hideout`
--

INSERT INTO `hideout` (`id`, `country_id`, `mission_id`, `code`, `address`, `type`) VALUES
(1, 1, 1, 'F110', '101 rue Bidon', 'Flat'),
(2, 4, 2, 'I049', '13 via Bugia', 'House'),
(3, 5, 3, 'G736', 'Klopstockstraße 5-1', 'bunker'),
(14, 6, 14, 'C1020', 'Undisclosed', 'Undisclosed');

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `required_specialty_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`id`, `required_specialty_id`, `country_id`, `title`, `description`, `codename`, `type`, `status`, `begin_date`, `end_date`) VALUES
(1, 1, 1, 'Project Bird', 'Lockpick the safe and retrieve the documents', 'Lima', 'Intel', 'Success', '2021-05-12', '2021-08-10'),
(2, 2, 4, 'Project Night', 'Get into the facility unnoticed', 'Zulu', 'Infiltration', 'In_progress', '2021-01-13', NULL),
(3, 3, 5, 'Project Boom', 'Blow up the door and retrieve the flashdrive.', 'India', 'intel', 'Failure', '2018-11-13', '2019-02-28'),
(14, 5, 6, 'Project Bite', 'Hack the whole thing', 'Hotel', 'Hacking', 'Planification', '2021-12-31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `specialty`
--

CREATE TABLE `specialty` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialty`
--

INSERT INTO `specialty` (`id`, `type`) VALUES
(1, 'lockpicking'),
(2, 'infiltration'),
(3, 'explosives'),
(4, 'assassination'),
(5, 'hacking');

-- --------------------------------------------------------

--
-- Structure de la table `target`
--

CREATE TABLE `target` (
  `id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `mission_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `id_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `target`
--

INSERT INTO `target` (`id`, `nationality_id`, `mission_id`, `name`, `surname`, `dob`, `id_code`) VALUES
(1, 1, 1, 'Danldo', 'Hervé', '1965-04-05', 148),
(2, 4, 2, 'Bersaglio', 'Luigi', '1942-07-07', 957),
(3, 5, 3, 'Spieler', 'Hans', '1987-05-06', 936),
(11, 3, 14, 'Tegrat', 'Akim', '1981-12-08', 65);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_880E0D76E7927C74` (`email`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_268B9C9D1C9DA55` (`nationality_id`),
  ADD KEY `IDX_268B9C9D61D767E2` (`current_mission_id`);

--
-- Index pour la table `agent_specialty`
--
ALTER TABLE `agent_specialty`
  ADD PRIMARY KEY (`agent_id`,`specialty_id`),
  ADD KEY `IDX_173220A83414710B` (`agent_id`),
  ADD KEY `IDX_173220A89A353316` (`specialty_id`);

--
-- Index pour la table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2AF5A5C1C9DA55` (`nationality_id`),
  ADD KEY `IDX_2AF5A5C61D767E2` (`current_mission_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `hideout`
--
ALTER TABLE `hideout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2C2FE159F92F3E70` (`country_id`),
  ADD KEY `IDX_2C2FE159BE6CAE90` (`mission_id`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9067F23C6A7AE33E` (`required_specialty_id`),
  ADD KEY `IDX_9067F23CF92F3E70` (`country_id`);

--
-- Index pour la table `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_466F2FFC1C9DA55` (`nationality_id`),
  ADD KEY `IDX_466F2FFCBE6CAE90` (`mission_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `hideout`
--
ALTER TABLE `hideout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `specialty`
--
ALTER TABLE `specialty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `target`
--
ALTER TABLE `target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `FK_268B9C9D1C9DA55` FOREIGN KEY (`nationality_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `FK_268B9C9D61D767E2` FOREIGN KEY (`current_mission_id`) REFERENCES `mission` (`id`);

--
-- Contraintes pour la table `agent_specialty`
--
ALTER TABLE `agent_specialty`
  ADD CONSTRAINT `FK_173220A83414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_173220A89A353316` FOREIGN KEY (`specialty_id`) REFERENCES `specialty` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `FK_2AF5A5C1C9DA55` FOREIGN KEY (`nationality_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `FK_2AF5A5C61D767E2` FOREIGN KEY (`current_mission_id`) REFERENCES `mission` (`id`);

--
-- Contraintes pour la table `hideout`
--
ALTER TABLE `hideout`
  ADD CONSTRAINT `FK_2C2FE159BE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`),
  ADD CONSTRAINT `FK_2C2FE159F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `FK_9067F23C6A7AE33E` FOREIGN KEY (`required_specialty_id`) REFERENCES `specialty` (`id`),
  ADD CONSTRAINT `FK_9067F23CF92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Contraintes pour la table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `FK_466F2FFC1C9DA55` FOREIGN KEY (`nationality_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `FK_466F2FFCBE6CAE90` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
