
-- Configuration BDD
SET NAMES utf8mb4;
CREATE DATABASE IF NOT EXISTS tphistoire;
USE tphistoire;

-- Désactive temporairement les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 0;

-- Suppression des tables dans le bon ordre
DROP TABLE IF EXISTS choix;
DROP TABLE IF EXISTS enonce;

-- Réactive les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 1;
-- --------------------------------------------------------

--
-- Structure de la table choix
--

CREATE TABLE choix (
  id int(11) NOT NULL,
  text text NOT NULL,
  id_enonceSource int(11) DEFAULT NULL,
  id_enonceCible int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table choix
--

INSERT INTO choix (id, text, id_enonceSource, id_enonceCible) VALUES
(35, "Devenir le plus grand général sous les cieux.", 1, 2),
(36, "Devenir le roi qui unifiera la Chine.", 1, 3),
(37, "Commencer un entraînement rigoureux.", 2, NULL),
(38, "Choisir le royaume pour lequel combattre.", 2, NULL),
(39, "Choisir le royaume à conquérir.", 3, 4),
(40, "Créer votre propre royaume.", 3, 5),
(41, "Rejoindre un royaume plus faible.", 4, 8),
(42, "Rejoindre un royaume puissant.", 4, 9),
(43, "Piller tout ce qui peut rapporter de l'argent.", 5, 6),
(44, "Tisser des relations avec des alliés influents.", 5, 7),
(45, "Profiter de cette opportunité pour tisser des liens avec ce personnage clé et gagner en influence politique.", 7, 11),
(46, "Tenter de séduire d'autres figures influentes pour renforcer votre réseau et gagner rapidement en pouvoir.", 7, 10),
(47, "Profiter de cette position pour proclamer l'indépendance de la cité et préparer le terrain pour fonder un royaume.", 11, 12),
(48, "Mettre en place des réformes pour renforcer la cité, améliorer ses défenses et réorganiser son administration.", 11, 13),
(49, "Accepter l'offre et devenir un micro-État protégé.", 13, 14),
(50, "Refuser l'offre et continuer à servir le royaume.", 13, 15);

-- --------------------------------------------------------

--
-- Structure de la table enonce
--

CREATE TABLE enonce (
  id int(11) NOT NULL,
  text text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table enonce
--

INSERT INTO enonce (id, text) VALUES
(1, "Vous êtes un jeune roturier à l'époque des Royaumes combattants de Chine. <br>\r\nQuel est votre objectif ?"),
(2, "Vous avez de grandes ambitions pour un roturier. <br>\r\nQue ferez-vous pour atteindre votre but ?"),
(3, "Cela semble presque impossible."),
(4, "Au milieu du Ve siècle, sept grands royaumes dominent la Chine : <br> \r\nWei, Zhao, Han, Qi, Yan, Chu et Qin."),
(5, "Avec quel argent et quel soutien ?"),
(6, "FIN 1 <br>\r\nN'ayant pas l'entraînement nécessaire, vous vous faites capturer, torturer et jeter dans une fosse publique."),
(7, "Bien que roturier, vous êtes d'une grande prestance. <br>\r\nUne jeune fille, séduite par votre charme, est la fille d'un officier civil influent. <br>\r\nGrâce à elle, vous parvenez à entrer en contact avec un personnage clé du gouvernement."),
(8, "FIN 2 <br>\r\nVous rejoignez l'État de Han, le plus faible des royaumes. <br>\r\nLorsque le royaume de Qin vous attaque. <br> \r\nVous sombrerez dans l'indifférence, et en à peine une année, Han est conquis tandis que vous périssez dans l'oubli, sans gloire."),
(9, "FIN 3 <br>\r\nVous rejoignez le royaume de Qin, puissant et ambitieux. <br>\r\nCependant, le roi de Qin est destiné à devenir le futur empereur de Chine, rendant tout espoir de devenir roi de ce royaume impossible. <br>\r\nVous restez un simple soldat, incapable de réaliser vos ambitions."),
(10, "FIN 4 <br>\r\nVos tentatives de séduction d'autres femmes finissent par atteindre les oreilles de la jeune fille et de son père. <br>\r\nHumilié, l'officier vous accuse de haute trahison pour avoir trahi la confiance de sa fille. <br>\r\nVous êtes exécuté publiquement, votre nom voué à l'oubli dans la disgrâce."),
(11, "Grâce à l'influence de l'officier civil, vous êtes élu nouveau gouverneur de la cité."),
(12, "FIN 5 <br>\r\nVotre proclamation d'indépendance est vue comme une rébellion. <br>\r\nLe roi envoie sa force punitive, écrasant votre cité et éliminant vos partisans. <br>\r\nQuant à vous, vous êtes capturé et exécuté, votre rêve de royaume anéanti."),
(13, "Grâce à votre gestion exemplaire et à la forteresse imprenable que vous avez fait construire suite aux réformes et améliorations. <br>\r\nLa cité obtient le droit de devenir un micro-État. <br>\r\nEn échange de la protection de trois royaumes voisins, vous vous engagez à leur fournir des informations stratégiques sur les autres États pendant les guerres."),
(14, "FIN 6 <br>\r\nGrâce à vos réformes exemplaires et à la forteresse imprenable que vous avez construite. <br>\r\nVous obtenez l'opportunité de fonder un micro-État sous la protection de trois royaumes puissants. <br>\r\nEn échange de leur protection, vous leur fournissez des informations stratégiques sur les autres États. <br>\r\nVous ne devenez pas roi, mais vous vivez en paix, à la tête de votre cité prospère, aux côtés de la jeune fille que vous avez séduite, maintenant votre compagne."),
(15, "FIN 7 <br>\r\nVous refusez l'offre des royaumes, préférant rester fidèle à votre royaume. <br> \r\nVotre gestion exemplaire et votre loyauté vous élèvent au rang des meilleurs gouverneurs du royaume. <br>\r\nVotre réputation grandit, et vous tissez une solide amitié avec le roi, qui vous considère désormais comme l'un de ses plus précieux conseillers. <br>\r\nVous continuez à mener une vie respectée, prospère et honorée.");