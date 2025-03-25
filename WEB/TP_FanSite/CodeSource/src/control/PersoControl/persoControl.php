<?php

/*
- Inclusion des fichiers nécessaire
*/
require_once 'src/control/BDDControl/connectBDD.php';
require_once 'src/model/PersoModel/persoModel.php';

/*
- Initialisation du modèle
*/
$persoModel = new PersoModel();

/*
- Récupération de tous les personnages
*/
$persos = $persoModel->getAllPerso($bdd);
