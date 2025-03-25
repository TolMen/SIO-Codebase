<?php

/*
- Inclusion de fichier nécessaire
*/
require_once dirname(__DIR__, 2) . '/model/LogModel/logWriteModel.php';
$config = require dirname(__DIR__, 3) . '/config/configBDD.php';

/*
- Extraction des paramètres de connexion de la BDD
*/
$host = $config['host'];
$dbname = $config['dbname'];
$admin = $config['admin'];
$pass = $config['pass'];


try {

    /*
    - Création d'une instance PDO, puis utilise les paramètres de configuration de la BDD, puis gère le lancement d'exception en cas d'erreur
    */
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $admin, $pass);
    
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    /*
    - Si échec, l'exception est déclenche pour enregistrer un message d'erreur dans les logs, puis arrête le script pour éviter d'aller dans les pages du site
    */
    $logWrite = new LogWriteModel();
    $message = "ERREUR Base de données indisponible : " . $e->getMessage() . PHP_EOL . PHP_EOL;
    $logWrite->writeLog($message, "LogFiles/error.log");
}
