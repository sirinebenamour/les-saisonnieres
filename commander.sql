-- Database: paiementinfo



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `infodepaiement`;
CREATE TABLE IF NOT EXISTS `infodepaiement` (
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adresse` varchar(500) NOT NULL
  `paiement` varchar(100) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `infodepaiement2`;
CREATE TABLE IF NOT EXISTS `infodepaiement2` (
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adresse` varchar(500) NOT NULL
  `paiement` varchar(100) NOT NULL,
  `produit` varchar(100) NOT NULL,
  `quantité` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



