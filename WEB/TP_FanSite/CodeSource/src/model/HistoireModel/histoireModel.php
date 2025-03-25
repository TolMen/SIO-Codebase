<?php

/*
- Inclusion de fichier nécessaire
*/
require_once 'src/control/BDDControl/connectBDD.php';

class HistoireModel {

    /*
    - Cette fonction récupere les informations des histoires
    */
    public function getAllHistoires(PDO $bdd)
    {
        $query = $bdd->prepare('SELECT id, title, content FROM histoire ORDER BY id ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
