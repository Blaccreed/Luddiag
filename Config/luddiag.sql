-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Janvier 2022 à 09:59
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `luddiag`
--

-- --------------------------------------------------------

--
-- Structure de la table `animateur`
--

CREATE TABLE `animateur` (
  `id_user` int(11) NOT NULL,
  `stand` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `animateur`
--

INSERT INTO `animateur` (`id_user`, `stand`) VALUES
(1, 'Star Platinum The World !!!!!');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `id_grille` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exposant`
--

CREATE TABLE `exposant` (
  `id_user` int(11) NOT NULL,
  `type_exposant` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `grille`
--

CREATE TABLE `grille` (
  `id_grille` int(11) NOT NULL,
  `rempli` tinyint(1) DEFAULT NULL,
  `type_grille` varchar(50) DEFAULT NULL,
  `date_deb_grille` datetime DEFAULT NULL,
  `date_fin_grille` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `id_jeu` int(11) NOT NULL,
  `nom_jeu` varchar(200) DEFAULT NULL,
  `categorie_jeu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id_user` int(11) NOT NULL,
  `nombre_points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `id_user` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL,
  `note` double DEFAULT NULL,
  `validee` tinyint(1) DEFAULT NULL,
  `date_note` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `id_user` int(11) NOT NULL,
  `fonction` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_flip`
--

CREATE TABLE `user_flip` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(250) DEFAULT NULL,
  `prenom_user` varchar(250) DEFAULT NULL,
  `mdp_user` varchar(250) DEFAULT NULL,
  `mail_user` varchar(250) DEFAULT NULL,
  `phone_user` varchar(50) DEFAULT NULL,
  `adresse_user` varchar(250) DEFAULT NULL,
  `cd_postal_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_flip`
--

INSERT INTO `user_flip` (`id_user`, `nom_user`, `prenom_user`, `mdp_user`, `mail_user`, `phone_user`, `adresse_user`, `cd_postal_user`) VALUES
(1, 'Hacquart', 'Dylan', 'dylan', 'dylan.hacquart@flip.fr', '0648844464', '16 rue des templiers assassin\'s creed', '91350');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id_grille`,`id_jeu`),
  ADD KEY `id_jeu` (`id_jeu`);

--
-- Index pour la table `exposant`
--
ALTER TABLE `exposant`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `grille`
--
ALTER TABLE `grille`
  ADD PRIMARY KEY (`id_grille`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`id_jeu`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD PRIMARY KEY (`id_user`,`id_jeu`,`id_user_1`),
  ADD KEY `id_jeu` (`id_jeu`),
  ADD KEY `id_user_1` (`id_user_1`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_flip`
--
ALTER TABLE `user_flip`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `animateur`
--
ALTER TABLE `animateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `exposant`
--
ALTER TABLE `exposant`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `grille`
--
ALTER TABLE `grille`
  MODIFY `id_grille` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `id_jeu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user_flip`
--
ALTER TABLE `user_flip`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD CONSTRAINT `animateur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_flip` (`id_user`);

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `contenu_ibfk_1` FOREIGN KEY (`id_grille`) REFERENCES `grille` (`id_grille`),
  ADD CONSTRAINT `contenu_ibfk_2` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`id_jeu`);

--
-- Contraintes pour la table `exposant`
--
ALTER TABLE `exposant`
  ADD CONSTRAINT `exposant_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_flip` (`id_user`);

--
-- Contraintes pour la table `grille`
--
ALTER TABLE `grille`
  ADD CONSTRAINT `grille_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `joueur` (`id_user`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_flip` (`id_user`);

--
-- Contraintes pour la table `noter`
--
ALTER TABLE `noter`
  ADD CONSTRAINT `noter_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `joueur` (`id_user`),
  ADD CONSTRAINT `noter_ibfk_2` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`id_jeu`),
  ADD CONSTRAINT `noter_ibfk_3` FOREIGN KEY (`id_user_1`) REFERENCES `animateur` (`id_user`);

--
-- Contraintes pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_flip` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
