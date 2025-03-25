<?php


/*
- Inclusion de fichier nécessaire
*/
require_once 'src/control/BDDControl/connectBDD.php';


class PersoModel
{

    /*
    - Récupère tous les personnages
    */
    public function getAllPerso(PDO $bdd)
    {
        $query = $bdd->prepare('SELECT * FROM personnages');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
