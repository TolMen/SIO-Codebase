-- Configuration BDD
SET NAMES utf8mb4;
CREATE DATABASE IF NOT EXISTS tpBlogBDD;
USE tpBlogBDD;

-- ---------------------------------------------

-- Désactive temporairement les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 0;

-- Suppression des tables dans le bon ordre
DROP TABLE IF EXISTS article;
DROP TABLE IF EXISTS commentaire;

-- Réactive les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 1;

-- ---------------------------------------------

-- Création des tables :
-- Table `article`
CREATE TABLE IF NOT EXISTS article (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre TEXT NOT NULL,
    date_parution DATETIME NOT NULL,
    content TEXT NOT NULL
) ENGINE=InnoDB;

-- Table `commentaire`
CREATE TABLE IF NOT EXISTS commentaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(64) NOT NULL,
    date_parution DATETIME NOT NULL,
    content TEXT NOT NULL,
    article_id INT NOT NULL,
    FOREIGN KEY (article_id) REFERENCES article(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table `utilisateur`
CREATE TABLE IF NOT EXISTS utilisateur (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    login varchar(26) NOT NULL,
    password text NOT NULL
) ENGINE=InnoDB;


-- ---------------------------------------------

-- Jeux de données

-- Insertion comptes admin
INSERT INTO utilisateur (login, password) VALUES 
('admin', SHA2('password', 256));


-- Insertion des articles
INSERT INTO article (titre, date_parution, content) VALUES
("Pourquoi adopter Symfony pour vos projets web ?", "2025-01-30 09:00:00", "Symfony est l'un des frameworks PHP les plus populaires. Il offre une structure robuste, une grande modularité et une forte communauté. Son écosystème riche facilite la création d'applications performantes et sécurisées."),
("Développeur PHP/Symfony : Comment se démarquer face aux développeurs WordPress ?", "2025-01-30 10:00:00", "Le marché du développement web est saturé de développeurs WordPress, mais un développeur PHP/Symfony peut se démarquer en mettant l'accent sur des compétences techniques avancées.
1. Spécialisation dans des solutions sur mesure : Symfony permet de créer des applications complexes et personnalisées, contrairement à WordPress qui reste souvent limité à des sites simples. Focalisez-vous sur des projets uniques comme des plateformes de gestion ou des CMS personnalisés.
2. Maîtrise des bonnes pratiques : Implémentez des principes comme SOLID, l'architecture MVC et l’intégration continue. Assurez-vous que votre code soit bien écrit, testable et maintenable, ce qui n’est pas toujours le cas avec WordPress.
3. Expertise en performance et scalabilité : Symfony est bien adapté pour gérer des applications lourdes. Optimisez les performances en utilisant des solutions comme le caching (Redis, Varnish) et en effectuant des tests de charge pour garantir une bonne scalabilité.
4. Renforcer la sécurité : Symfony permet d’ajouter des mécanismes de sécurité avancés (authentification JWT, gestion des rôles) pour des applications plus sécurisées que celles construites avec WordPress, souvent vulnérables par défaut.
5. Focus sur la maintenance à long terme : Concentrez-vous sur des projets évolutifs grâce à Symfony, en utilisant des outils comme Docker et Kubernetes pour créer des applications évolutives et faciles à maintenir.
6. Réseautage et communication : Développez vos soft skills pour bien comprendre les besoins des clients et proposer des solutions adaptées. Participez à des événements Symfony et développez votre présence en ligne.

En vous spécialisant sur ces aspects, vous pourrez réellement vous différencier des développeurs WordPress, qui sont souvent plus limités dans la personnalisation et l’évolutivité des projets."),
("Les bonnes pratiques en sécurité des applications web", "2025-01-30 11:00:00", "La cybersécurité est un enjeu majeur pour les applications web. L'utilisation de bonnes pratiques comme l'échappement des entrées utilisateur, la gestion des sessions sécurisées et l'implémentation de Content Security Policy (CSP) permet de réduire les vulnérabilités.");

-- Insertion des commentaires
INSERT INTO commentaire (pseudo, date_parution, content, article_id) VALUES
("PHPFan", "2025-01-30 09:30:00", "J'adore Symfony ! Sa documentation est claire et il permet un développement rapide et efficace.", 1),
("DevPro", "2025-01-30 09:45:00", "Symfony est parfait pour les projets complexes, bien mieux qu'un CMS limité.", 1),
("MarieCode", "2025-01-30 09:50:00", "J'ai utilisé Symfony pour un gros projet d'entreprise, et l'expérience était excellente !", 1),
("JeanCodeur", "2025-01-30 10:30:00", "Merci pour cet article ! On a souvent du mal à justifier l'utilisation de Symfony face à WordPress.", 2),
("FullStack42", "2025-01-30 10:40:00", "Il faut absolument mettre en avant la performance et la sécurité quand on compare Symfony à WP.", 2),
("AgenceDev", "2025-01-30 10:45:00", "En tant qu'agence, nous avons abandonné WordPress pour du Symfony sur mesure, et nos clients sont ravis !", 2),
("CyberGeek", "2025-01-30 11:30:00", "Merci pour ces conseils ! La sécurité devrait être une priorité absolue pour tous les développeurs.", 3),
("SecureDev", "2025-01-30 11:40:00", "Beaucoup trop de sites négligent la sécurité, merci pour ce rappel !", 3),
("AliceSec", "2025-01-30 11:50:00", "Content Security Policy est un must ! Il faudrait en parler plus souvent.", 3);
