<?php

class JoueurDAO {

    public static function createJoueur($joueur) {

        $tablePlayer = DatabaseLinker::getConnexion();

        $insertPlayer = $tablePlayer->prepare("INSERT INTO joueur (nom, prenom) VALUES (?, ?)");
        $insertPlayer->execute(array($joueur->getNom(), $joueur->getPrenom()));
        
        if ($insertPlayer) {
            header('Location: index.php');
            exit;
        }
    }

    public static function getJoueurById($id) {

        $tablePlayer = DatabaseLinker::getConnexion();

        $recupPlayerId = $tablePlayer->prepare("SELECT * FROM joueur WHERE id = ?");
        $recupPlayerId->execute(array($id));
        $resultat = $recupPlayerId->fetch(PDO::FETCH_ASSOC);

        if($resultat) {
            $newPlayer = new JoueurDTO($resultat["nom"], $resultat["prenom"]);
            $newPlayer->setId($resultat['id']);
            return $newPlayer;
        }
        return null;
    }

    public static function getJoueurs() {

        $tablePlayer = DatabaseLinker::getConnexion();

        $recupPlayers = $tablePlayer->prepare("SELECT * FROM joueur");
        $recupPlayers->execute();

        $resultat = $recupPlayers->fetchAll(PDO::FETCH_ASSOC);


        $joueursArray = array();
        foreach ($resultat as $playerData) {
            $playerD = new JoueurDTO($playerData["nom"], $playerData["prenom"]);
            $playerD->setId($playerData['id']);
            $joueursArray[] = $playerD;
        }
        return $joueursArray;
    }

    public static function updateJoueur($joueur) {
        $tablePlayer = DatabaseLinker::getConnexion();

        $updatePlayer = $tablePlayer->prepare("UPDATE joueur SET nom = ?, prenom = ? WHERE id = ?");
        $updatePlayer->execute(array($joueur->getNom(), $joueur->getPrenom(), $joueur->getId()));

        if ($updatePlayer) {
            header('Location: index.php');
            exit;
        }
    }

    public static function deleteJoueurById($id) {
        $tablePlayer = DatabaseLinker::getConnexion();

        $deletePlayer = $tablePlayer->prepare("DELETE FROM joueur WHERE id = ?");
        $deletePlayer->execute(array($id));

        if ($deletePlayer) {
            header('Location: index.php');
            exit;
        }
    }
}
