-- Configuration BDD
SET NAMES utf8mb4;
CREATE DATABASE IF NOT EXISTS tdEchecMat;
USE tdEchecMat;

-- ---------------------------------------------

-- Désactive temporairement les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 0;

-- Suppression des tables dans le bon ordre
DROP TABLE IF EXISTS joueur;
DROP TABLE IF EXISTS duel;

-- Réactive les contraintes de clé étrangère
SET FOREIGN_KEY_CHECKS = 1;

-- ---------------------------------------------

-- Création des tables :
-- Table `joueur`
CREATE TABLE IF NOT EXISTS joueur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

-- Table `duel`
CREATE TABLE IF NOT EXISTS duel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    victoire_joueur_noir TINYINT NOT NULL,
    joueur_noir_id INT NOT NULL,
    joueur_blanc_id INT NOT NULL,
    FOREIGN KEY (joueur_noir_id) REFERENCES joueur(id) ON DELETE CASCADE,
    FOREIGN KEY (joueur_blanc_id) REFERENCES joueur(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------

-- Insertion de donnée

INSERT INTO joueur (nom, prenom) VALUES
("Dupont", "Jean"),
("Ribo", "Anais"),
("Dupont", "Jeanne"),
("Dupont", "Pierre"),
("Magnus", "Carlsen");

INSERT INTO duel (joueur_noir_id, joueur_blanc_id, victoire_joueur_noir) VALUES
(1, 2, 1), -- Jean VS Anais / 1 = True
(2, 3, 0), -- Anais VS Jeanne / 0 = False
(5, 4, 1), -- Carlsen VS Pierre / 1 = True
(5, 3, 1), -- Carlsen VS Jeanne / 1 = True
(1, 4, 0); -- Jean VS Pierre / 0 = False
