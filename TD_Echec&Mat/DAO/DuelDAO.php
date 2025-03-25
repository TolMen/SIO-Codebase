<?php

class DuelDAO {

    public static function getDuels() {

        $tableDuel = DatabaseLinker::getConnexion();

        $recupDuel = $tableDuel->prepare("SELECT * FROM duel");
        $recupDuel->execute();

        $resultat = $recupDuel->fetchAll(PDO::FETCH_ASSOC);


        $duels = array();
        foreach ($resultat as $duelData) {
            $duelD = new DuelDTO($duelData["joueur_noir_id"], $duelData["joueur_blanc_id"], $duelData["victoire_joueur_noir"]);
            $duelD->setId($duelData['id']);
            $duels[] = $duelD;
        }
        return $duels;
    }

    public static function deleteDuelById($duelId) {

        $tableDuel = DatabaseLinker::getConnexion();

        $deleteDuel = $tableDuel->prepare("DELETE FROM duel WHERE id = ?");
        $deleteDuel->execute(array($duelId));

        if ($deleteDuel) {
            header('Location: index.php');
            exit;
        }
    }

    public static function createDuel($duel)
    {

        $tableDuel = DatabaseLinker::getConnexion();

        $insertDuel = $tableDuel->prepare("INSERT INTO duel (joueur_noir_id, joueur_blanc_id, victoire_joueur_noir) VALUES (?, ?, ?)");
        $insertDuel->execute(array($duel->getJoueurNoirId(), $duel->getJoueurBlancId(), $duel->isVictoireJoueurNoir()));

        if ($insertDuel) {
            header('Location: index.php');
            exit;
        }
    }
}