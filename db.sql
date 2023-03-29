-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 mars 2023 à 20:48
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id_address`, `address`, `country`, `city`) VALUES
(1, '3 rue de l\'italie', 'France', 'Hoerdt'),
(2, '12 rue de la funk', 'France', 'Lyon'),
(3, '5 rue du coffee', 'France', 'Brumath'),
(4, '3 rue du sommeil', 'France', 'Hoerdt'),
(5, '12 rue de la music', 'France', 'Lyon'),
(6, '5 rue de la protec', 'France', 'Brumath'),
(7, '3 rue de christophe', 'France', 'Hoerdt'),
(8, '12 rue de la funk', 'France', 'Lyon'),
(9, '5 avenue des fines herbes', 'France', 'Brumath'),
(10, '29 rue des emo-girls', 'France', 'Pfulgriesheim'),
(11, '5 rue de jinx', 'Arcane', 'Piltower'),
(12, '11 rue de la vovo manguo', 'France', 'Kienheim'),
(13, '23 rue des ligaments', 'France', 'cityfort'),
(14, '5 avenue de la MONSTER', 'France', 'Molsheim'),
(15, '56 rue de la margherita', 'Italie', 'Pasta'),
(16, '23 rue des Parisiennes', 'Croatie', 'Split'),
(17, 'test', 'test', 'test'),
(18, 'test', 'test', 'test'),
(19, 'test', 'test', 'test'),
(20, 'test', 'test', 'test'),
(21, '7 rue de la mort', 'France', 'starsbourg'),
(22, 'zzzz rue del a zzzz', 'zzzzzz ', 'dodo'),
(23, 'ffeufhuf 8 ', 'luxembourg', 'lilles');

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id_application` int(11) NOT NULL,
  `resume` varchar(50) DEFAULT NULL,
  `letter` varchar(50) DEFAULT NULL,
  `id_internship` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id_application`, `resume`, `letter`, `id_internship`, `id_users`) VALUES
(1, 'resume1.pdf', 'covletter1.pdf', 1, 1),
(2, 'resume2.pdf', 'covletter2.pdf', 2, 3),
(3, 'resume3.pdf', 'covletter3.pdf', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `apply`
--

CREATE TABLE `apply` (
  `id_users` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apply`
--

INSERT INTO `apply` (`id_users`, `id_internship`) VALUES
(6, 1),
(6, 3),
(6, 5),
(7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `campus`
--

CREATE TABLE `campus` (
  `id_campus` int(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `name_campus` varchar(50) NOT NULL,
  `img_campus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `campus`
--

INSERT INTO `campus` (`id_campus`, `id_address`, `name_campus`, `img_campus`) VALUES
(1, 4, 'UQAM', '../assets/img/québec.png'),
(2, 10, 'CESI split', '../assets/img/split.png'),
(3, 11, 'CESI pasta', '../assets/img/italie.png');

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `description_company` varchar(500) NOT NULL,
  `accepted` int(11) DEFAULT NULL,
  `name_company` varchar(50) NOT NULL,
  `image_company` varchar(200) NOT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id_company`, `description_company`, `accepted`, `name_company`, `image_company`, `activity`, `mail`, `id_address`) VALUES
(2, 'Du poulet mariné frais servis dans un pain pita fais par un boulangé accompagné de tomates concombres et oignons ainsi qu\'une délicieuse féta que nous allons chercher en grèce pour rajouter de la fraicher. HITADAKIMASSE!', 2, 'OldemGrill', '../assets/img/oldem.png', 'restauration', 'quedupoulet@free.fr', 7),
(3, 'Mes amis pleins de sang que mes habits pleins de sang, t\'as mis ta babe sur le tektek et toutes tes timps au centre, veut que je l\'apelle AMBERS mais son blaze c\'est ambre', 2, 'Amber’s', '../assets/img/ambers.png', 'game development', 'ambre@orange.fr', 2),
(4, 'Pas plus que médium, toujours au réveil pour la fete un bon gout anisé et de l\'acool à flot. DANS LA VALEE AHAH DE DANA LALILALA', 2, 'Ricard', '../assets/img/ricard.png', 'alcohol seller', 'copaing@gmail.fr', 9),
(5, 'Bonjour, on est des nerds on mange des cartes graphiques, pendant que les autres zoukent des meufs en boite nous on s\'amuse avec nos microprocesseur (kalilinux obligatoire)', 2, 'LDLC', '../assets/img/ldlc.png', 'hardware', 'nerd@wanadoo.fr', 5),
(6, 'Ici c\'est détente, on travaille pas trop c\'est mauvais pour la santé, on fume que de la CBD vous inquiétez pas. Bon la storytime je suis dans une galère parce que benji il m\'a filé de la amnesia au lieu de la purple haze', 2, 'Elou’s medicals plant', '../assets/img/elou.png', 'botanic', 'weed@defonce.fr', 6),
(11, 'zzzzzzz', 230, 'cesicorp', '', 'informatique', 'fjij@fzfz.com', 21),
(13, 'camelcamel', 237, 'entreprise_3', '', 'INFO', 'CSFHF@dznd.com', 23);

-- --------------------------------------------------------

--
-- Structure de la table `got`
--

CREATE TABLE `got` (
  `id_users` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `got`
--

INSERT INTO `got` (`id_users`, `id_skill`) VALUES
(1, 4),
(2, 2),
(3, 2),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `internship`
--

CREATE TABLE `internship` (
  `id_internship` int(11) NOT NULL,
  `title_internship` varchar(50) NOT NULL,
  `image_internship` varchar(200) NOT NULL,
  `description_internship` varchar(500) NOT NULL,
  `places` int(11) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `remuneration` varchar(50) DEFAULT NULL,
  `post` date DEFAULT NULL,
  `start` date NOT NULL,
  `id_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `internship`
--

INSERT INTO `internship` (`id_internship`, `title_internship`, `image_internship`, `description_internship`, `places`, `duration`, `remuneration`, `post`, `start`, `id_company`) VALUES
(1, 'Stage en dev de jeu videals', 'C:/www/assets/img/stage1.png', 'On recrute des gens cools', 4, '12 weeks', '4 vbuks', '2022-09-11', '2023-04-03', 3),
(2, 'Stage pour faire des prosit', 'C:/www/assets/img/stage2.png', 'Viens faire ton stage chez nous on est des gars trop cool', 1, '22 weeks', '30 vbuks', '2023-01-04', '2023-04-03', 2),
(3, 'Stage en microprocesseurs', 'C:/www/assets/img/stage3.png', 'Le fun avant tout, soirée du lundi tous les lundi', 2, '17 weeks', '4 Billion', '2023-04-02', '2023-04-03', 5),
(4, 'Stage en réseaux', 'C:/www/assets/img/stage4.png', 'Open to work à tous les brosky de stras', 1, '4 weeks', '400 dollars', '2022-12-24', '2023-04-03', 6),
(5, 'Chômage rémunéré', 'C:/www/assets/img/stage5.png', 'Pas trop de travail mais de l\'argent assuré', 1, '20 weeks', '1 smic', '2023-03-22', '2023-03-31', 2),
(6, 'Farm sur la Top Lane', 'C:/www/assets/img/stage6.png', 'Eviter de rundown svp mais sinon tout pick accepté', 1, '2 weeks', '300 gold', '2023-03-23', '2023-04-19', 5),
(7, 'Création de site web', 'C:/www/assets/img/stage7.png', 'Vous serez amené à réaliser un site web pour notre entreprise il se doit être RESPONSIVE MAXIME', 1, '30 weeks', '2000 $', '2023-03-22', '2023-05-15', 3),
(8, 'Connexion au réseaux', 'C:/www/assets/img/stage8.png', 'Nous vouloir wifi', 1, '2 weeks', '567$', '2023-03-01', '1900-04-11', 4),
(45, 'test', '', 'test', 5, '5 mois', '5 vbuck', '2028-03-23', '2018-01-01', 4),
(46, 'Stage en microprocesseurs', 'C:/www/assets/img/stage3.png', 'Le fun avant tout, soirée du lundi tous les lundi', 2, '17 weeks', '4 Billion', '2023-04-02', '2023-04-03', 5),
(48, 'cesicorp', '', 'zzzzzzz', 10, '30', '500', '2029-03-23', '2023-03-23', 4),
(49, 'CREER LE STAGE', '', 'zzzz', 23, '100', '10', '2029-03-23', '2003-11-11', 11);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL,
  `name_promotion` varchar(50) DEFAULT NULL,
  `id_campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `name_promotion`, `id_campus`) VALUES
(1, 'Informatique', 1),
(2, 'CPIA1', 2),
(3, 'CPIA2', 2),
(4, 'FISA', 3),
(5, 'Informatique', 2),
(19, 'Informatique', 3),
(46, 'CPIA1', 1),
(47, 'CPIA2', 3),
(48, 'CPIA1', 3),
(49, 'CPIA2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `requires`
--

CREATE TABLE `requires` (
  `id_internship` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `requires`
--

INSERT INTO `requires` (`id_internship`, `id_skill`) VALUES
(1, 3),
(2, 2),
(3, 1),
(3, 4),
(4, 2),
(4, 4),
(5, 1),
(5, 2),
(5, 4),
(7, 3),
(7, 4),
(8, 1),
(45, 1),
(45, 2),
(45, 3),
(48, 2),
(48, 3),
(49, 1),
(49, 4);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `comments` varchar(240) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id_review`, `comments`, `rating`, `id_company`, `id_users`) VALUES
(1, 'Very good !!', 5, 2, 1),
(2, 'Delicious !!', 4, 3, 6),
(4, 'A bit or expertise, a lot of fun !', 5, 4, 4),
(5, 'Don’t go over medium please.', 3, 4, 5),
(6, 'Wich company was it already ?', 1, 6, 6),
(7, 'Hygiène discutable', 1, 2, 4),
(8, 'Test fou', 4, 2, 9),
(10, 'Je préfère TOPACHAT !!', 5, 5, 16),
(11, 'Que ils ont voulu m\'alcooliser...', 3, 4, 7),
(12, 'Super l\'entreprise !', 0, 3, 6),
(13, '', 1, 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id_skill`, `name_skill`) VALUES
(1, 'Network'),
(2, 'POO'),
(3, 'Frontend'),
(4, 'Backend');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_users` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_promotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `login`, `password`, `image_users`, `status`, `id_promotion`) VALUES
(1, 'simone.weil', '0d0e6929368fb7853dabdbfe689eb83aaefbe899c43548f339dd57b4b2686abc\n', '../assets/img/simon.png', 'eleve', 48),
(2, 'sylvain.perrouas', 'c5d134f7e958b2a81f717f9e530b12bf6ec9e68b280261188d6386612f53be3f', '../assets/img/sylv1.png', 'eleve', 1),
(3, 'paul.gerard', 'f649802750dc9e6465ae1f306cc76c3022c267a00ca1dc42e008e63cecaa1920\n', '../assets/img/paul.png', 'eleve', 4),
(4, 'hugo.behra', '6e5db17e68723e891c3228c82efe81bff45274e94fb93dc4de76ecb819cb2703', '../assets/img/behra.png', 'eleve', 2),
(6, 'maxime.dumonteil', '7e5b549423975e06a13c81bbda5d689a98eb046d6a0ea88e2f6792f4993f96cf', '../assets/img/maxime.png', 'admin', 2),
(7, 'matteo.tremisi', '76a46f82191cec6cc48d19c8d46ceaae820258ea9c78d53d020f137a88fc5360', '../assets/img/MA2T.png', 'Tuteur', 19),
(9, 'admin.admin', 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892', '../assets/img/admin.png', 'admin', 0),
(16, 'toma.duflow', 'a2bfa177f0f8fed26df06f6a79949571c9adc981bad0983c17215026f1d6aa85', '../assets/img/victor.png', 'eleve', 2),
(36, 'ancien.og', 'aa3d2fe4f6d301dbd6b8fb2d2fddfb7aeebf3bec53ffff4b39a0967afa88c609', '', 'Tuteur', 46);

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_users` int(11) NOT NULL,
  `id_internship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`id_users`, `id_internship`) VALUES
(1, 3),
(2, 2),
(3, 1),
(3, 4),
(4, 1),
(6, 3),
(6, 4),
(6, 46),
(7, 1),
(16, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id_application`),
  ADD KEY `id_internship` (`id_internship`),
  ADD KEY `id_student` (`id_users`);

--
-- Index pour la table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_users`,`id_internship`),
  ADD KEY `id_internship` (`id_internship`);

--
-- Index pour la table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id_campus`),
  ADD UNIQUE KEY `id_address` (`id_address`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD KEY `id_address` (`id_address`);

--
-- Index pour la table `got`
--
ALTER TABLE `got`
  ADD PRIMARY KEY (`id_users`,`id_skill`),
  ADD KEY `id_skill` (`id_skill`);

--
-- Index pour la table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id_internship`),
  ADD KEY `id_entreprise` (`id_company`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`),
  ADD KEY `Id_campus` (`id_campus`);

--
-- Index pour la table `requires`
--
ALTER TABLE `requires`
  ADD PRIMARY KEY (`id_internship`,`id_skill`),
  ADD KEY `id_skill` (`id_skill`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_entreprise` (`id_company`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_users`,`id_internship`),
  ADD KEY `id_internship` (`id_internship`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `application`
--
ALTER TABLE `application`
  MODIFY `id_application` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `campus`
--
ALTER TABLE `campus`
  MODIFY `id_campus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `internship`
--
ALTER TABLE `internship`
  MODIFY `id_internship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `internship` (`id_internship`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `apply_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `internship` (`id_internship`);

--
-- Contraintes pour la table `campus`
--
ALTER TABLE `campus`
  ADD CONSTRAINT `campus_ibfk_1` FOREIGN KEY (`id_address`) REFERENCES `address` (`id_address`);

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`id_address`) REFERENCES `address` (`id_address`);

--
-- Contraintes pour la table `got`
--
ALTER TABLE `got`
  ADD CONSTRAINT `got_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `got_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`);

--
-- Contraintes pour la table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `campus` (`id_campus`);

--
-- Contraintes pour la table `requires`
--
ALTER TABLE `requires`
  ADD CONSTRAINT `requires_ibfk_1` FOREIGN KEY (`id_internship`) REFERENCES `internship` (`id_internship`),
  ADD CONSTRAINT `requires_ibfk_2` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`);

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_internship`) REFERENCES `internship` (`id_internship`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
