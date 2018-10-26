-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Décembre 2017 à 11:34
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bd_visitact_v1`
--

-- --------------------------------------------------------

--
-- Structure de la table `g2_activite_compl`
--

CREATE TABLE IF NOT EXISTS `g2_activite_compl` (
  `ac_num` int(11) NOT NULL AUTO_INCREMENT,
  `ac_date` date NOT NULL,
  `ac_lieu` varchar(50) NOT NULL,
  `ac_theme` varchar(50) NOT NULL,
  `ac_cll_matricule` varchar(15) NOT NULL,
  `ac_budgetEstimé` decimal(8,2) NOT NULL,
  `ac_validation` tinyint(1) NOT NULL,
  PRIMARY KEY (`ac_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `g2_collaborateur`
--

CREATE TABLE IF NOT EXISTS `g2_collaborateur` (
  `cll_matricule` varchar(11) NOT NULL,
  `cll_nom` varchar(100) NOT NULL,
  `cll_prenom` varchar(20) NOT NULL,
  `cll_dateembauche` date NOT NULL,
  `cll_motdepasse` varchar(50) NOT NULL,
  PRIMARY KEY (`cll_matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_collaborateur`
--

INSERT INTO `g2_collaborateur` (`cll_matricule`, `cll_nom`, `cll_prenom`, `cll_dateembauche`, `cll_motdepasse`) VALUES
('a131', 'Villechalane', 'Louis', '1992-12-11', 'pass'),
('a17', 'Andre', 'David', '1991-08-26', 'pass'),
('a55', 'Bedos', 'Christian', '1987-07-17', 'pass'),
('a93', 'Tusseau', 'Louis', '1999-01-02', 'pass'),
('b13', 'Bentot', 'Pascal', '1996-03-11', 'pass'),
('b16', 'Bioret', 'Luc', '1997-03-21', 'pass'),
('b19', 'Bunisset', 'Francis', '1999-01-31', 'pass'),
('b25', 'Bunisset', 'Denise', '1994-07-03', 'pass'),
('b28', 'Cacheux', 'Bernard', '2000-08-02', 'pass'),
('b34', 'Cadic', 'Eric', '1993-12-06', 'pass'),
('b4', 'Charoze', 'Catherine', '1997-09-25', 'pass'),
('b50', 'Clepkens', 'Christophe', '1998-01-18', 'pass'),
('b59', 'Cottin', 'Vincenne', '1995-10-21', 'pass'),
('c14', 'Daburon', 'François', '1989-02-01', 'pass'),
('c3', 'De Bandt', 'Philippe', '1992-05-05', 'pass'),
('c54', 'Debelle', 'Michel', '1991-04-09', 'pass'),
('d13', 'Debelle', 'Jeanne', '1991-12-05', 'pass'),
('d51', 'Debroise', 'Michel', '1997-11-18', 'pass'),
('e22', 'Desmarquest', 'Nathalie', '1989-03-24', 'pass'),
('e24', 'Desnost', 'Pierre', '1993-05-17', 'pass'),
('e39', 'Dudouit', 'Frederic', '1988-04-26', 'pass'),
('e49', 'Duncombe', 'Claude', '1996-02-19', 'pass'),
('e5', 'Enault-Pascreau', 'Celine', '1990-11-27', 'pass'),
('e52', 'Eynde', 'Valerie', '1991-10-31', 'pass'),
('f21', 'Finck', 'Jacques', '1993-06-08', 'pass'),
('f39', 'Fremont', 'Fernande', '1997-02-15', 'pass'),
('f4', 'Gest', 'Alain', '1994-05-03', 'pass'),
('g19', 'Gheysen', 'Galassus', '1996-01-18', 'pass'),
('g30', 'Girard', 'Yvon', '1999-03-27', 'pass'),
('g53', 'Gombert', 'Luc', '1985-10-02', 'pass'),
('g7', 'Guindon', 'Caroline', '1996-01-13', 'pass'),
('h13', 'Guindon', 'François', '1993-05-08', 'pass'),
('h30', 'Igigabel', 'Guy', '1998-04-26', 'pass'),
('h35', 'Jourdren', 'Pierre', '1993-08-26', 'pass'),
('h40', 'Juttard', 'Pierre-Raoul', '1992-11-01', 'pass'),
('j45', 'Laboure-Morel', 'Saout', '1998-02-25', 'pass'),
('j50', 'Landr', 'Philippe', '1992-12-16', 'pass'),
('j8', 'Langeard', 'Hugues', '1998-06-18', 'pass'),
('k4', 'Lanne', 'Bernard', '1996-11-21', 'pass'),
('k53', 'Le Naour', 'Paul', '1983-03-23', 'pass'),
('l14', 'Le Begue', 'Jean', '1995-02-02', 'pass'),
('l23', 'Leclercq', 'Servane', '1995-06-05', 'pass'),
('l46', 'Lecornu', 'Jean-Bernard', '1997-01-24', 'pass'),
('l56', 'Lecornu', 'Ludovic', '1996-02-27', 'pass'),
('m35', 'Lejard', 'Agnes', '1987-10-06', 'pass'),
('m45', 'Lesaulnier', 'Pascal', '1990-10-13', 'pass'),
('matricule', 'nom', 'prenom', '0000-00-00', 'pass'),
('n42', 'Letessier', 'Stephane', '1996-03-06', 'pass'),
('n58', 'Loirat', 'Didier', '1992-08-30', 'pass'),
('n59', 'Maffezzoli', 'Thibaud', '1994-12-19', 'pass'),
('o26', 'Mancini', 'Anne', '1995-01-05', 'pass'),
('ok', 'test', 'test', '2001-01-01', 'pass'),
('p32', 'Marcouiller', 'Gerard', '1992-12-24', 'pass'),
('p40', 'Michel', 'Jean-Claude', '1992-12-14', 'pass'),
('p41', 'Montecot', 'Françoise', '1998-07-27', 'pass'),
('p42', 'Notini', 'Veronique', '1994-12-12', 'pass'),
('p49', 'Onfroy', 'Den', '1977-10-03', 'pass'),
('p6', 'Pascreau', 'Charles', '1997-03-30', 'pass'),
('p7', 'Pernot', 'Claude', '1990-03-01', 'pass'),
('p8', 'Perrier', 'Marcel', '1991-06-23', 'pass'),
('PlayBoy', 'xxx', 'xxx', '2002-02-02', 'pass'),
('q17', 'Petit', 'Jean-Louis', '1997-09-06', 'pass'),
('r24', 'Piquery', 'Patrick', '1984-07-29', 'pass'),
('r58', 'Quiquandon', 'Jocelyn', '1990-06-30', 'pass'),
('s10', 'Retailleau', 'Josselin', '1995-11-14', 'pass'),
('s21', 'Retailleau', 'Pascal', '1992-09-25', 'pass'),
('t43', 'Souron', 'Maryse', '1995-03-09', 'pass'),
('t47', 'Tiphagne', 'Patrick', '1997-08-29', 'pass'),
('t55', 'Trehet', 'Alain', '1994-11-29', 'pass'),
('t60', 'Tusseau', 'Josselin', '1991-03-29', 'pass'),
('try', 'mm', 'mm', '2002-01-01', 'pass');

-- --------------------------------------------------------

--
-- Structure de la table `g2_disposer`
--

CREATE TABLE IF NOT EXISTS `g2_disposer` (
  `disp_reg_code` varchar(10) NOT NULL,
  `disp_annee` int(11) NOT NULL,
  `disp_budget_annuel` decimal(8,2) NOT NULL,
  PRIMARY KEY (`disp_reg_code`,`disp_annee`),
  KEY `fk_annee` (`disp_annee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_disposer`
--

INSERT INTO `g2_disposer` (`disp_reg_code`, `disp_annee`, `disp_budget_annuel`) VALUES
('PI', 2018, '25000.00');

-- --------------------------------------------------------

--
-- Structure de la table `g2_famille`
--

CREATE TABLE IF NOT EXISTS `g2_famille` (
  `fam_code` varchar(10) NOT NULL,
  `fam_libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`fam_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `g2_inviter`
--

CREATE TABLE IF NOT EXISTS `g2_inviter` (
  `inv_pra_num` int(11) NOT NULL,
  `inv_ac_num` int(11) NOT NULL,
  PRIMARY KEY (`inv_ac_num`,`inv_pra_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `g2_medicament`
--

CREATE TABLE IF NOT EXISTS `g2_medicament` (
  `med_depotlegal` varchar(20) NOT NULL,
  `med_nomcommercial` longtext NOT NULL,
  `med_fam_code` varchar(11) NOT NULL,
  `med_composition` varchar(200) NOT NULL,
  `med_effets` varchar(200) NOT NULL,
  `med_contreindic` varchar(200) NOT NULL,
  `med_prixechantillon` decimal(10,0) NOT NULL,
  PRIMARY KEY (`med_depotlegal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_medicament`
--

INSERT INTO `g2_medicament` (`med_depotlegal`, `med_nomcommercial`, `med_fam_code`, `med_composition`, `med_effets`, `med_contreindic`, `med_prixechantillon`) VALUES
('3MYC7', 'TRIMYCINE', 'CRT', 'Triamcinolone (acetonide) + Neomycine + Nystatine', 'Ce medicament est un corticoide a activite forte ou tres forte associee a un antibiotique et un antifongique, utilise en application locale dans certaines atteintes cutanees surinfectees.', 'Ce medicament est contre-indique en cas d''allergie a l''un des constituants, d''infections de la peau ou de parasitisme non traités, d''acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusi', '0'),
('ADIMOL9', 'ADIMOL', 'ABP', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines ou aux céphalosporines.', '0'),
('AMOPIL7', 'AMOPIL', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit étre administré avec prudence en cas d''allergie aux céphalosporines.', '0'),
('AMOX45', 'AMOXAR', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', '0'),
('AMOXIG12', 'AMOXI G', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit étre administré avec prudence en cas d''allergie aux céphalosporines.', '0'),
('APATOUX22', 'APATOUX Vitamine C', 'ALO', 'Tyrothricine + Tétracaéne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants, en cas de phénylcétonurie et chez l''enfant de moins de 6 ans.', '0'),
('BACTIG10', 'BACTIGEL', 'ABC', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l''acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d''allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', '0'),
('BACTIV13', 'BACTIVIL', 'AFM', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', '0'),
('BITALV', 'BIVALIC', 'AAA', 'Dextropropoxyphéne + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d''intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d''allergie aux médicaments de cette famille, d''insuffisance hépatique ou d''insuffisance rénale.', '0'),
('CARTION6', 'CARTION', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fiévre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d''ulcére gastroduodénal, maladies graves du foie.', '0'),
('CLAZER6', 'CLAZER', 'AFM', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l''ulcére gastro-duodénal, en association avec d''autres médicaments.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', '0'),
('DEPRIL9', 'DEPRAMIL', 'AIM', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévéres, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l''enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d''adénome de la prostate, d''infarctus récent, ou si vous avez reééu un traitement par IMAO durant les 2 semaines précédentes ou en cas d''allergie', '0'),
('DIMIRTAM6', 'DIMIRTAM', 'AAC', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévéres.', 'La prise de ce produit est contre-indiquée en cas de d''allergie éé l''un des constituants.', '0'),
('DOLRIL7', 'DOLORIL', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fiévre.', 'Ce médicament est contre-indiqué en cas d''allergie au paracétamol ou aux salicylates.', '0'),
('DORNOM8', 'NORMADOR', 'HYP', 'Doxylamine', 'Ce médicament est utilisé pour traiter l''insomnie chez l''adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l''enfant de moins de 15 ans.', '0'),
('EQUILARX6', 'EQUILAR', 'AAH', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas étre utilisé en cas d''allergie au produit, en cas de glaucome ou de rétention urinaire.', '0'),
('EVILR7', 'EVEILLOR', 'PSA', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet ag', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants.', '0'),
('INSXT5', 'INSECTIL', 'AH', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqéres d''insecte et l''urticaire.', 'Ce médicament est contre-indiqué en cas d''allergie aux antihistaminiques.', '0'),
('JOVAI8', 'JOVENIL', 'AFM', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', '0'),
('LIDOXY23', 'LIDOXYTRACINE', 'AFC', 'Oxytétracycline +Lidocaéne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants. Il ne doit pas étre associé aux rétinoédes.', '0'),
('LITHOR12', 'LITHORINE', 'AP', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas étre utilisé si vous étes allergique au lithium. Avant de prendre ce traitement, signalez éé votre médecin traitant si vous souffrez d''insuffisance rénale, ou si vous avez un', '0'),
('PARMOL16', 'PARMOCODEINE', 'AA', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants, chez l''enfant de moins de 15 Kg, en cas d''insuffisance hépatique ou respiratoire, d''asthme, de phénylcétonurie et chez la f', '0'),
('PHYSOI8', 'PHYSICOR', 'PSA', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d''activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants.', '0'),
('PIRIZ8', 'PIRIZAN', 'ABA', 'Pyrazinamide', 'Ce médicament est utilisé, en association éé d''autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants, d''insuffisance rénale ou hépatique, d''hyperuricémie ou de porphyrie.', '0'),
('POMDI20', 'POMADINE', 'AO', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l''oeil.', 'Ce médicament est contre-indiqué en cas d''allergie aux antibiotiques appliqués localement.', '0'),
('TROXT21', 'TROXADET', 'AIN', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également étre utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d''allergie au produit.', '0'),
('TXISOL22', 'TOUXISOL Vitamine C', 'ALO', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d''allergie éé l''un des constituants et chez l''enfant de moins de 6 ans.', '0'),
('URIEG6', 'URIREGUL', 'AUM', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d''allergie éé l''un des constituants et d''insuffisance rénale.', '0');

-- --------------------------------------------------------

--
-- Structure de la table `g2_motif_visite`
--

CREATE TABLE IF NOT EXISTS `g2_motif_visite` (
  `mot_code` int(11) NOT NULL AUTO_INCREMENT,
  `mot_libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`mot_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `g2_motif_visite`
--

INSERT INTO `g2_motif_visite` (`mot_code`, `mot_libelle`) VALUES
(1, 'Actualisation annuelle'),
(2, 'Baisse activité');

-- --------------------------------------------------------

--
-- Structure de la table `g2_noter`
--

CREATE TABLE IF NOT EXISTS `g2_noter` (
  `hist_annee` int(11) NOT NULL,
  `hist_cll_matricule` varchar(11) NOT NULL,
  `hist_note` int(11) NOT NULL,
  `hist_bilan` varchar(250) NOT NULL,
  PRIMARY KEY (`hist_annee`,`hist_cll_matricule`),
  KEY `fk_hist_matricule` (`hist_cll_matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_noter`
--

INSERT INTO `g2_noter` (`hist_annee`, `hist_cll_matricule`, `hist_note`, `hist_bilan`) VALUES
(0, 'b19', 7, '				cc	'),
(2017, 'a17', 8, '				test	'),
(2017, 'b25', 9, '				v	'),
(2017, 'b34', 6, '				c	'),
(2017, 'e24', 8, '			test		'),
(2017, 'PlayBoy', 5, '		dddd			');

-- --------------------------------------------------------

--
-- Structure de la table `g2_offrir`
--

CREATE TABLE IF NOT EXISTS `g2_offrir` (
  `off_rap_cll_matricule` varchar(20) NOT NULL,
  `off_rap_num` int(11) NOT NULL,
  `off_med_depotlegal` varchar(20) NOT NULL,
  PRIMARY KEY (`off_rap_cll_matricule`,`off_med_depotlegal`,`off_rap_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_offrir`
--

INSERT INTO `g2_offrir` (`off_rap_cll_matricule`, `off_rap_num`, `off_med_depotlegal`) VALUES
('a131', 3, 'AMOX45'),
('a17', 4, '3MYC7'),
('a17', 4, 'AMOX45'),
('a17', 8, 'EVILR7');

-- --------------------------------------------------------

--
-- Structure de la table `g2_participer`
--

CREATE TABLE IF NOT EXISTS `g2_participer` (
  `rea_cll_matricule` int(11) NOT NULL,
  `rea_ac_num` int(11) NOT NULL,
  PRIMARY KEY (`rea_cll_matricule`,`rea_ac_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `g2_posseder`
--

CREATE TABLE IF NOT EXISTS `g2_posseder` (
  `pos_pra_num` int(11) NOT NULL,
  `pos_spe_code` int(11) NOT NULL,
  `pos_diplome` varchar(100) NOT NULL,
  PRIMARY KEY (`pos_pra_num`,`pos_spe_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `g2_praticien`
--

CREATE TABLE IF NOT EXISTS `g2_praticien` (
  `pra_num` int(11) NOT NULL,
  `pra_nom` varchar(50) NOT NULL,
  `pra_prenom` varchar(20) NOT NULL,
  `pra_adresse` varchar(100) NOT NULL,
  `pra_cp` int(11) NOT NULL,
  `pra_ville` varchar(50) NOT NULL,
  `pra_coefnotoriete` decimal(5,2) NOT NULL,
  `pra_coefconfiance` decimal(5,2) NOT NULL,
  `pra_typ_code` varchar(10) NOT NULL,
  `pra_prochaineVisite` date DEFAULT NULL,
  PRIMARY KEY (`pra_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_praticien`
--

INSERT INTO `g2_praticien` (`pra_num`, `pra_nom`, `pra_prenom`, `pra_adresse`, `pra_cp`, `pra_ville`, `pra_coefnotoriete`, `pra_coefconfiance`, `pra_typ_code`, `pra_prochaineVisite`) VALUES
(1, 'Notini', 'Alain', '114 r Authie', 85000, 'LA ROCHE SUR YON', '290.00', '0.00', 'MH', NULL),
(2, 'Gosselin', 'Albert', '13 r Devon', 41000, 'BLOIS', '307.00', '0.00', 'MV', NULL),
(3, 'Delahaye', 'Andr', '36 av 6 Juin', 25000, 'BESANCON', '185.00', '0.00', 'PS', NULL),
(4, 'Leroux', 'Andr', '47 av Robert Schuman', 60000, 'BEAUVAIS', '172.00', '0.00', 'PH', NULL),
(5, 'Desmoulins', 'Anne', '31 r St Jean', 30000, 'NIMES', '94.00', '0.00', 'PO', NULL),
(6, 'Mouel', 'Anne', '27 r Auvergne', 80000, 'AMIENS', '45.00', '0.00', 'MH', NULL),
(7, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', 29000, 'MORLAIX', '20.00', '0.00', 'MV', NULL),
(8, 'Marcouiller', 'Arnaud', '31 r St Jean', 68000, 'MULHOUSE', '396.00', '0.00', 'PS', NULL),
(9, 'Dupuy', 'Benoit', '9 r Demolombe', 34000, 'MONTPELLIER', '395.00', '0.00', 'PH', NULL),
(10, 'Lerat', 'Bernard', '31 r St Jean', 59000, 'LILLE', '257.00', '0.00', 'PO', NULL),
(11, 'Mar?ais-Lefebvre', 'Bertrand', '86Bis r Basse', 67000, 'STRASBOURG', '450.00', '0.00', 'MH', NULL),
(12, 'Boscher', 'Bruno', '94 r Falaise', 10000, 'TROYES', '356.00', '0.00', 'MV', NULL),
(13, 'Morel', 'Catherine', '21 r Chateaubriand', 75000, 'PARIS', '379.00', '0.00', 'PS', NULL),
(14, 'Guivarch', 'Chantal', '4 av Gén Laperrine', 45000, 'ORLEANS', '114.00', '0.00', 'PH', NULL),
(15, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', 6000, 'NICE', '222.00', '0.00', 'PO', NULL),
(16, 'Rossa', 'Claire', '14 av Thi', 6000, 'NICE', '529.00', '0.00', 'MH', NULL),
(17, 'Cauchy', 'Denis', '5 av Ste Thérèse', 11000, 'NARBONNE', '458.00', '0.00', 'MV', NULL),
(18, 'Gaff', 'Dominique', '9 av 1ère Armée Française', 35000, 'RENNES', '213.00', '0.00', 'PS', NULL),
(19, 'Guenon', 'Dominique', '98 bd Mar Lyautey', 44000, 'NANTES', '175.00', '0.00', 'PH', NULL),
(20, 'Prévot', 'Dominique', '29 r Lucien Nelle', 87000, 'LIMOGES', '151.00', '0.00', 'PO', NULL),
(21, 'Houchard', 'Eliane', '9 r Demolombe', 49100, 'ANGERS', '436.00', '0.00', 'MH', NULL),
(22, 'Desmons', 'Elisabeth', '51 r Bernières', 29000, 'QUIMPER', '281.00', '0.00', 'MV', NULL),
(23, 'Flament', 'Elisabeth', '11 r Pasteur', 35000, 'RENNES', '315.00', '0.00', 'PS', NULL),
(24, 'Goussard', 'Emmanuel', '9 r Demolombe', 41000, 'BLOIS', '40.00', '0.00', 'PH', NULL),
(25, 'Desprez', 'Eric', '9 r Vaucelles', 33000, 'BORDEAUX', '406.00', '0.00', 'PO', NULL),
(26, 'Coste', 'Evelyne', '29 r Lucien Nelle', 19000, 'TULLE', '441.00', '0.00', 'MH', NULL),
(27, 'Lefebvre', 'Frédéric', '2 pl Wurzburg', 55000, 'VERDUN', '573.00', '0.00', 'MV', NULL),
(28, 'Lem', 'Frédéric', '29 av 6 Juin', 56000, 'VANNES', '326.00', '0.00', 'PS', NULL),
(29, 'Martin', 'Frédéric', 'Bât A 90 r Bayeux', 70000, 'VESOUL', '506.00', '0.00', 'PH', NULL),
(30, 'Marie', 'Frédérique', '172 r Caponi?re', 70000, 'VESOUL', '313.00', '0.00', 'PO', NULL),
(31, 'Rosenstech', 'Geneviève', '27 r Auvergne', 75000, 'PARIS', '366.00', '0.00', 'MH', NULL),
(32, 'Pontavice', 'Ghislaine', '8 r Gaillon', 86000, 'POITIERS', '265.00', '0.00', 'MV', NULL),
(33, 'Leveneur-Mosquet', 'Guillaume', '47 av Robert Schuman', 64000, 'PAU', '184.00', '0.00', 'PS', NULL),
(34, 'Blanchais', 'Guy', '30 r Authie', 8000, 'SEDAN', '502.00', '0.00', 'PH', NULL),
(35, 'Leveneur', 'Hugues', '7 pl St Gilles', 62000, 'ARRAS', '7.00', '0.00', 'PO', NULL),
(36, 'Mosquet', 'Isabelle', '22 r Jules Verne', 76000, 'ROUEN', '77.00', '0.00', 'MH', NULL),
(37, 'Giraudon', 'Jean-Christophe', '1 r Albert de Mun', 38100, 'VIENNE', '92.00', '0.00', 'MV', NULL),
(38, 'Marie', 'Jean-Claude', '26 r H?rouville', 69000, 'LYON', '120.00', '0.00', 'PS', NULL),
(39, 'Maury', 'Jean-François', '5 r Pierre Girard', 71000, 'CHALON SUR SAONE', '13.00', '0.00', 'PH', NULL),
(40, 'Dennel', 'Jean-Louis', '7 pl St Gilles', 28000, 'CHARTRES', '550.00', '0.00', 'PO', NULL),
(41, 'Ain', 'Jean-Pierre', '4 résid Olympia', 2000, 'LAON', '5.00', '0.00', 'MH', NULL),
(42, 'Chemery', 'Jean-Pierre', '51 pl Ancienne Boucherie', 14000, 'CAEN', '396.00', '0.00', 'MV', NULL),
(43, 'Comoz', 'Jean-Pierre', '35 r Auguste Lechesne', 18000, 'BOURGES', '340.00', '0.00', 'PS', NULL),
(44, 'Desfaudais', 'Jean-Pierre', '7 pl St Gilles', 29000, 'BREST', '71.00', '0.00', 'PH', NULL),
(45, 'Phan', 'Jérôme', '9 r Clos Caillet', 79000, 'NIORT', '451.00', '0.00', 'PO', NULL),
(46, 'Riou', 'Line', '43 bd Gén Vanier', 77000, 'MARNE LA VALLEE', '193.00', '0.00', 'MH', NULL),
(47, 'Chubilleau', 'Louis', '46 r Eglise', 17000, 'SAINTES', '202.00', '0.00', 'MV', NULL),
(48, 'Lebrun', 'Lucette', '178 r Auge', 54000, 'NANCY', '410.00', '0.00', 'PS', NULL),
(49, 'Goessens', 'Marc', '6 av 6 Juin', 39000, 'DOLE', '548.00', '0.00', 'PH', NULL),
(50, 'Laforge', 'Marc', '5 résid Prairie', 50000, 'SAINT LO', '265.00', '0.00', 'PO', NULL),
(51, 'Millereau', 'Marc', '36 av 6 Juin', 72000, 'LA FERTE BERNARD', '430.00', '0.00', 'MH', NULL),
(52, 'Dauverne', 'Marie-Christine', '69 av Charlemagne', 21000, 'DIJON', '281.00', '0.00', 'MV', NULL),
(53, 'Vittorio', 'Myriam', '3 pl Champlain', 94000, 'BOISSY SAINT LEGER', '356.00', '0.00', 'PS', NULL),
(54, 'Lapasset', 'Nhieu', '31 av 6 Juin', 52000, 'CHAUMONT', '107.00', '0.00', 'PH', NULL),
(55, 'Plantet-Besnier', 'Nicole', '10 av 1ère Armée Française', 86000, 'CHATELLEREAULT', '369.00', '0.00', 'PO', NULL),
(56, 'Chubilleau', 'Pascal', '3 r Hastings', 15000, 'AURRILLAC', '290.00', '0.00', 'MH', NULL),
(57, 'Robert', 'Pascal', '31 r St Jean', 93000, 'BOBIGNY', '162.00', '0.00', 'MV', NULL),
(58, 'Jean', 'Pascale', '114 r Authie', 49100, 'SAUMUR', '375.00', '0.00', 'PS', NULL),
(59, 'Chanteloube', 'Patrice', '14 av Thi', 13000, 'MARSEILLE', '478.00', '0.00', 'PH', NULL),
(60, 'Lecuirot', 'Patrice', 'résid St P?res 55 r Pigaci?re', 54000, 'NANCY', '239.00', '0.00', 'PO', NULL),
(61, 'Gandon', 'Patrick', '47 av Robert Schuman', 37000, 'TOURS', '599.00', '0.00', 'MH', NULL),
(62, 'Mirouf', 'Patrick', '22 r Puits Picard', 74000, 'ANNECY', '458.00', '0.00', 'MV', NULL),
(63, 'Boireaux', 'Philippe', '14 av Thi', 10000, 'CHALON EN CHAMPAGNE', '454.00', '0.00', 'PS', NULL),
(64, 'Cendrier', 'Philippe', '7 pl St Gilles', 12000, 'RODEZ', '164.00', '0.00', 'PH', NULL),
(65, 'Duhamel', 'Philippe', '114 r Authie', 34000, 'MONTPELLIER', '98.00', '0.00', 'PO', NULL),
(66, 'Grigy', 'Philippe', '15 r M?lingue', 44000, 'CLISSON', '285.00', '0.00', 'MH', NULL),
(67, 'Linard', 'Philippe', '1 r Albert de Mun', 81000, 'ALBI', '486.00', '0.00', 'MV', NULL),
(68, 'Lozier', 'Philippe', '8 r Gaillon', 31000, 'TOULOUSE', '48.00', '0.00', 'PS', NULL),
(69, 'Dech?tre', 'Pierre', '63 av Thi', 23000, 'MONTLUCON', '253.00', '0.00', 'PH', NULL),
(70, 'Goessens', 'Pierre', '22 r Jean Romain', 40000, 'MONT DE MARSAN', '426.00', '0.00', 'PO', NULL),
(71, 'Lem?nager', 'Pierre', '39 av 6 Juin', 57000, 'METZ', '118.00', '0.00', 'MH', NULL),
(72, 'N', 'Pierre', '39 av 6 Juin', 82000, 'MONTAUBAN', '72.00', '0.00', 'MV', NULL),
(73, 'Guyot', 'Pierre-Laurent', '43 bd Gén Vanier', 48000, 'MENDE', '352.00', '0.00', 'PS', NULL),
(74, 'Chauchard', 'Roger', '9 r Vaucelles', 13000, 'MARSEILLE', '552.00', '0.00', 'PH', NULL),
(75, 'Mabire', 'Roland', '11 r Boutiques', 67000, 'STRASBOURG', '422.00', '0.00', 'PO', NULL),
(76, 'Leroy', 'Soazig', '45 r Boutiques', 61000, 'ALENCON', '570.00', '0.00', 'MH', NULL),
(77, 'Guyot', 'Stéphane', '26 r H?rouville', 46000, 'FIGEAC', '28.00', '0.00', 'MV', NULL),
(78, 'Delposen', 'Sylvain', '39 av 6 Juin', 27000, 'DREUX', '292.00', '0.00', 'PS', NULL),
(79, 'Rault', 'Sylvie', '15 bd Richemond', 2000, 'SOISSON', '526.00', '0.00', 'PH', NULL),
(80, 'Renouf', 'Sylvie', '98 bd Mar Lyautey', 88000, 'EPINAL', '425.00', '0.00', 'PO', NULL),
(81, 'Alliet-Grach', 'Thierry', '14 av Thi', 7000, 'PRIVAS', '451.00', '0.00', 'MH', NULL),
(82, 'Bayard', 'Thierry', '92 r Falaise', 42000, 'SAINT ETIENNE', '271.00', '0.00', 'MV', NULL),
(83, 'Gauchet', 'Thierry', '7 r Desmoueux', 38100, 'GRENOBLE', '406.00', '0.00', 'PS', NULL),
(84, 'Bobichon', 'Tristan', '219 r Caponi?re', 9000, 'FOIX', '218.00', '0.00', 'PH', NULL),
(85, 'Duchemin-Laniel', 'Véronique', '130 r St Jean', 33000, 'LIBOURNE', '265.00', '0.00', 'PO', NULL),
(86, 'Laurent', 'Youn', '34 r Demolombe', 53000, 'MAYENNE', '496.00', '0.00', 'MH', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `g2_presenter`
--

CREATE TABLE IF NOT EXISTS `g2_presenter` (
  `pre_rap_num` int(11) NOT NULL,
  `pre_rap_cll_matricule` varchar(11) NOT NULL,
  `pre_med_depotlegal` varchar(11) NOT NULL,
  PRIMARY KEY (`pre_med_depotlegal`,`pre_rap_num`,`pre_rap_cll_matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_presenter`
--

INSERT INTO `g2_presenter` (`pre_rap_num`, `pre_rap_cll_matricule`, `pre_med_depotlegal`) VALUES
(8, 'a17', 'DIMIRTAM6'),
(8, 'a17', 'JOVAI8');

-- --------------------------------------------------------

--
-- Structure de la table `g2_rapport_visite`
--

CREATE TABLE IF NOT EXISTS `g2_rapport_visite` (
  `rap_cll_matricule` varchar(10) NOT NULL,
  `rap_num` int(11) NOT NULL,
  `rap_date_visite` date NOT NULL,
  `rap_date` date NOT NULL,
  `rap_bilan` longtext NOT NULL,
  `rap_mot_code` int(11) NOT NULL,
  `rap_pra_num` int(11) NOT NULL,
  PRIMARY KEY (`rap_num`,`rap_cll_matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_rapport_visite`
--

INSERT INTO `g2_rapport_visite` (`rap_cll_matricule`, `rap_num`, `rap_date_visite`, `rap_date`, `rap_bilan`, `rap_mot_code`, `rap_pra_num`) VALUES
('a131', 3, '2002-04-18', '2002-04-18', 'M?decin curieux, ? recontacer en d?cembre pour r?union', 1, 23),
('a17', 4, '2003-05-21', '2003-05-21', 'Changement de direction, red?finition de la politique m?dicamenteuse, recours au g?n?rique', 2, 4),
('a131', 7, '2003-03-23', '2003-03-23', 'RAS', 1, 41),
('a17', 8, '2017-06-09', '2017-06-10', 'Tests', 3, 34);

-- --------------------------------------------------------

--
-- Structure de la table `g2_region`
--

CREATE TABLE IF NOT EXISTS `g2_region` (
  `reg_code` varchar(10) NOT NULL,
  `reg_sec_code` varchar(10) NOT NULL,
  `reg_nom` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_region`
--

INSERT INTO `g2_region` (`reg_code`, `reg_sec_code`, `reg_nom`) VALUES
('AL', 'E', 'Alsace Lorraine'),
('AQ', 'S', 'Aquitaine'),
('AU', 'P', 'Auvergne'),
('BG', 'O', 'Bretagne'),
('BN', 'O', 'Basse Normandie'),
('BO', 'E', 'Bourgogne'),
('CA', 'N', 'Champagne Ardennes'),
('CE', 'P', 'Centre'),
('FC', 'E', 'Franche Comt'),
('HN', 'N', 'Haute Normandie'),
('IF', 'P', 'Ile de France'),
('LG', 'S', 'Languedoc'),
('LI', 'P', 'Limousin'),
('MP', 'S', 'Midi Pyrenees'),
('NP', 'N', 'Nord Pas de Calais'),
('PA', 'S', 'Provence Alpes Cote d''Azur'),
('PC', 'O', 'Poitou Charente'),
('PI', 'N', 'Picardie'),
('PL', 'O', 'Pays de Loire'),
('RA', 'E', 'Rhone Alpes'),
('RO', 'S', 'Roussilon'),
('VD', 'O', 'Vend');

-- --------------------------------------------------------

--
-- Structure de la table `g2_secteur`
--

CREATE TABLE IF NOT EXISTS `g2_secteur` (
  `sec_code` varchar(10) NOT NULL,
  `sec_libelle` varchar(20) NOT NULL,
  PRIMARY KEY (`sec_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_secteur`
--

INSERT INTO `g2_secteur` (`sec_code`, `sec_libelle`) VALUES
('E', 'Est'),
('N', 'Nord'),
('O', 'Ouest'),
('P', 'Paris centre'),
('S', 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `g2_specialite`
--

CREATE TABLE IF NOT EXISTS `g2_specialite` (
  `spe_code` varchar(10) NOT NULL,
  `spe_libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`spe_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_specialite`
--

INSERT INTO `g2_specialite` (`spe_code`, `spe_libelle`) VALUES
('ACP', 'anatomie et cytologie pathologiques'),
('AMV', 'ang?iologie, m?decine vasculaire'),
('ARC', 'anesth?siologie et r?animation chirurgicale'),
('BM', 'biologie m?dicale'),
('CAC', 'cardiologie et affections cardio-vasculaires'),
('CCT', 'chirurgie cardio-vasculaire et thoracique'),
('CG', 'chirurgie g?n?rale'),
('CMF', 'chirurgie maxillo-faciale'),
('COM', 'canc?rologie, oncologie m?dicale'),
('COT', 'chirurgie orthop?dique et traumatologie'),
('CPR', 'chirurgie plastique reconstructrice et esth?tique'),
('CU', 'chirurgie urologique'),
('CV', 'chirurgie vasculaire'),
('DN', 'diab?tologie-nutrition, nutrition'),
('DV', 'dermatologie et v?n?r?ologie'),
('EM', 'endocrinologie et m?tabolismes'),
('ETD', '?valuation et traitement de la douleur'),
('GEH', 'gastro-ent?rologie et h?patologie (appareil digestif)'),
('GMO', 'gyn?cologie m?dicale, obst?trique'),
('GO', 'gyn?cologie-obst?trique'),
('HEM', 'maladies du sang (h?matologie)'),
('MBS', 'm?decine et biologie du sport'),
('MDT', 'm?decine du travail'),
('MMO', 'm?decine manuelle - ost?opathie'),
('MN', 'm?decine nucl?aire'),
('MPR', 'm?decine physique et de r?adaptation'),
('MTR', 'm?decine tropicale, pathologie infectieuse et tropicale'),
('NEP', 'n?phrologie'),
('NRC', 'neurochirurgie'),
('NRL', 'neurologie'),
('ODM', 'orthop?die dento maxillo-faciale'),
('OPH', 'ophtalmologie'),
('ORL', 'oto-rhino-laryngologie'),
('PEA', 'psychiatrie de l''enfant et de l''adolescent'),
('PME', 'p?diatrie maladies des enfants'),
('PNM', 'pneumologie'),
('PSC', 'psychiatrie'),
('RAD', 'radiologie (radiodiagnostic et imagerie m?dicale)'),
('RDT', 'radioth?rapie (oncologie option radioth?rapie)'),
('RGM', 'reproduction et gyn?cologie m?dicale'),
('RHU', 'rhumatologie'),
('STO', 'stomatologie'),
('SXL', 'sexologie'),
('TXA', 'toxicomanie et alcoologie');

-- --------------------------------------------------------

--
-- Structure de la table `g2_travailler`
--

CREATE TABLE IF NOT EXISTS `g2_travailler` (
  `tra_cll_matricule` varchar(10) NOT NULL,
  `tra_date` date NOT NULL,
  `tra_reg_code` varchar(11) NOT NULL,
  `tra_role` varchar(30) NOT NULL,
  `tra_role_actuel` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`tra_cll_matricule`,`tra_date`,`tra_reg_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_travailler`
--

INSERT INTO `g2_travailler` (`tra_cll_matricule`, `tra_date`, `tra_reg_code`, `tra_role`, `tra_role_actuel`) VALUES
('a131', '1992-12-11', 'BN', 'Visiteur', 1),
('a131', '1996-05-27', 'BG', 'Visiteur', 1),
('a17', '1991-08-26', 'RA', 'Visiteur', NULL),
('a17', '1997-09-19', 'RA', 'Délégué', 1),
('a55', '1987-07-17', 'MP', 'Visiteur', 1),
('a55', '1995-05-19', 'RO', 'Visiteur', NULL),
('a55', '1999-08-21', 'RO', 'Délégué', 1),
('a93', '1999-01-02', 'PC', 'Visiteur', 1),
('b13', '1996-03-11', 'AL', 'Visiteur', 1),
('b16', '1997-03-21', 'BG', 'Visiteur', 1),
('b19', '1999-01-31', 'PL', 'Visiteur', 1),
('b25', '1994-07-03', 'PL', 'Visiteur', NULL),
('b25', '2000-01-01', 'PL', 'Délégué', 1),
('b28', '2000-08-02', 'LG', 'Visiteur', 1),
('b34', '1993-12-06', 'CE', 'Délégué', NULL),
('b34', '1999-06-18', 'CE', 'Responsable', 1),
('b4', '1997-09-25', 'AQ', 'Visiteur', 1),
('b50', '1998-01-18', 'PA', 'Visiteur', 1),
('b59', '1995-10-21', 'RA', 'Visiteur', 1),
('c14', '1989-02-01', 'PA', 'Visiteur', NULL),
('c14', '1997-02-01', 'PA', 'Visiteur', NULL),
('c14', '2001-03-03', 'PA', 'Délégué', 1),
('c3', '1992-05-05', 'CA', 'Visiteur', 1),
('c54', '1991-04-09', 'AL', 'Visiteur', 1),
('d13', '1991-12-05', 'PL', 'Visiteur', 1),
('d51', '1997-11-18', 'FC', 'Visiteur', NULL),
('d51', '2002-03-20', 'FC', 'Délégué', 1),
('e22', '1989-03-24', 'AL', 'Visiteur', 1),
('e24', '1993-05-17', 'AL', 'Délégué', NULL),
('e24', '2000-02-29', 'AL', 'Responsable', 1),
('e39', '1988-04-26', 'IF', 'Visiteur', 1),
('e49', '1996-02-19', 'MP', 'Visiteur', 1),
('e5', '1990-11-27', 'MP', 'Visiteur', NULL),
('e5', '1995-11-27', 'MP', 'Délégué', NULL),
('e5', '2000-11-27', 'AQ', 'Responsable', 1),
('e52', '1991-10-31', 'HN', 'Visiteur', 1),
('f21', '1993-06-08', 'RA', 'Visiteur', 1),
('f39', '1997-02-15', 'RA', 'Visiteur', 1),
('f4', '1994-05-03', 'MP', 'Visiteur', 1),
('g19', '1996-01-18', 'IF', 'Visiteur', 1),
('g30', '1999-03-27', 'PI', 'Délégué', NULL),
('g30', '2000-10-31', 'PI', 'Responsable', 1),
('g53', '1985-10-02', 'BG', 'Visiteur', 1),
('g7', '1996-01-13', 'LI', 'Visiteur', 1),
('h13', '1993-05-08', 'LI', 'Visiteur', 1),
('h30', '1998-04-26', 'IF', 'Visiteur', 1),
('h35', '1993-08-26', 'AU', 'Visiteur', 1),
('h40', '1992-11-01', 'CA', 'Visiteur', 1),
('j45', '1998-02-25', 'CA', 'Délégué', 1),
('j50', '1992-12-16', 'NP', 'Visiteur', 1),
('j8', '1998-06-18', 'IF', 'Délégué', 1),
('k4', '1996-11-21', 'LG', 'Visiteur', 1),
('k53', '1983-03-23', 'CA', 'Visiteur', 1),
('l14', '1995-02-02', 'PL', 'Visiteur', 1),
('l23', '1995-06-05', 'PC', 'Visiteur', 1),
('l46', '1997-01-24', 'PL', 'Visiteur', 1),
('l56', '1996-02-27', 'FC', 'Visiteur', 1),
('m35', '1987-10-06', 'MP', 'Visiteur', 1),
('m45', '1990-10-13', 'AL', 'Visiteur', NULL),
('m45', '1999-04-08', 'AL', 'Délégué', 1),
('n42', '1996-03-06', 'HN', 'Visiteur', 1),
('n58', '1992-08-30', 'CE', 'Visiteur', 1),
('n59', '1994-12-19', 'PI', 'Visiteur', 1),
('o26', '1995-01-05', 'LG', 'Visiteur', 1),
('p32', '1992-12-24', 'IF', 'Visiteur', 1),
('p40', '1992-12-14', 'BN', 'Délégué', NULL),
('p40', '1999-07-17', 'BN', 'Responsable', 1),
('p41', '1998-07-27', 'PC', 'Visiteur', 1),
('p42', '1994-12-12', 'PI', 'Visiteur', 1),
('p49', '1977-10-03', 'CE', 'Visiteur', 1),
('p6', '1997-03-30', 'AQ', 'Visiteur', 1),
('p7', '1990-03-01', 'RO', 'Visiteur', 1),
('p8', '1991-06-23', 'BO', 'Visiteur', 1),
('PlayBoy', '2002-02-02', 'CE', 'Visiteur', 1),
('q17', '1997-09-06', 'BN', 'Visiteur', 1),
('r24', '1984-07-29', 'BN', 'Visiteur', NULL),
('r24', '1998-05-25', 'BN', 'Délégué', 1),
('r58', '1990-06-30', 'BG', 'Visiteur', 1),
('s10', '1995-11-14', 'FC', 'Visiteur', 1),
('s21', '1992-09-25', 'LI', 'Visiteur', 1),
('t43', '1995-03-09', 'BO', 'Visiteur', 1),
('t47', '1997-08-29', 'PI', 'Visiteur', 1),
('t55', '1994-11-29', 'MP', 'Visiteur', 1),
('t60', '1991-03-29', 'CE', 'Visiteur', 1),
('try', '2002-01-01', 'HN', 'Visiteur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `g2_type_praticien`
--

CREATE TABLE IF NOT EXISTS `g2_type_praticien` (
  `typ_code` varchar(10) NOT NULL,
  `typ_libelle` varchar(30) NOT NULL,
  `typ_lieu` varchar(50) NOT NULL,
  PRIMARY KEY (`typ_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `g2_type_praticien`
--

INSERT INTO `g2_type_praticien` (`typ_code`, `typ_libelle`, `typ_lieu`) VALUES
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `g2_disposer`
--
ALTER TABLE `g2_disposer`
  ADD CONSTRAINT `fk_reg_code` FOREIGN KEY (`disp_reg_code`) REFERENCES `g2_region` (`reg_code`);

--
-- Contraintes pour la table `g2_noter`
--
ALTER TABLE `g2_noter`
  ADD CONSTRAINT `fk_hist_matricule` FOREIGN KEY (`hist_cll_matricule`) REFERENCES `g2_collaborateur` (`cll_matricule`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
