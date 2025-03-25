<?php

include_once("tools/DatabaseLinker.php");
include_once("DTO/JoueurDTO.php");
include_once("DAO/JoueurDAO.php");

if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["id"])) {
    $id = htmlspecialchars($_POST["id"], ENT_QUOTES);
    $nom = htmlspecialchars($_POST["nom"], ENT_QUOTES);
    $prenom = htmlspecialchars($_POST["prenom"], ENT_QUOTES);
    $joueur = new JoueurDTO($nom, $prenom);
    $joueur->setId($id);
    JoueurDAO::updateJoueur($joueur);
}

header('Location: index.php');
exit;
