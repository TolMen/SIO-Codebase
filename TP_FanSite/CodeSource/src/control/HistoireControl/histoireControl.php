<?php

/*
- Inclusion des fichiers nécessaire
*/
require_once 'src/control/BDDControl/connectBDD.php';
require_once 'src/model/HistoireModel/histoireModel.php';

/*
- Initialisation du modèle
*/
$histoireModel = new HistoireModel();

/*
- Récupération de toutes les histoires
*/
$histoires = $histoireModel->getAllHistoires($bdd);
