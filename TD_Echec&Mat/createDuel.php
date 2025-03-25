<?php

include_once("tools/DatabaseLinker.php");
include_once("DTO/DuelDTO.php");
include_once("DAO/DuelDAO.php");

echo $_POST["pionNoir"];

if (!empty($_POST["pionNoir"]) && !empty($_POST["pionBlanc"])) {
    echo "Bonjour";
    if ($_POST["pionNoir"] != $_POST["pionBlanc"]) {
        $joueur_noir_id = $_POST["pionNoir"];
        $joueur_blanc_id = $_POST["pionBlanc"];
        $victoire_joueur_noir = $_POST["victoirePionNoir"];
        $duel = new DuelDTO($joueur_noir_id, $joueur_blanc_id, $victoire_joueur_noir);
        DuelDAO::createDuel($duel);
        header('Location: index.php');
        exit;
    } else {
        header('Location: index.php');
        exit;
    }
}