<?php

/*
- Démarre une session
*/
session_start();

/*
- Inclusion de fichier nécessaire
*/
require_once 'src/control/BDDControl/connectBDD.php';

/*
- Vérifie les paramètres après ? dans l'URL, si vide redirection vers la page d'accueil des visiteurs
*/
if (empty($_SERVER['QUERY_STRING'])) {
    header("Location: home.php");
    throw new Exception("Redirection vers la page d'accueil.");
}
