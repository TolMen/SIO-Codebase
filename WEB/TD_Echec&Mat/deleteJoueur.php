<?php

include_once("tools/DatabaseLinker.php");
include_once("DTO/JoueurDTO.php");
include_once("DAO/JoueurDAO.php");

if (!empty($_GET["id"])) {
   JoueurDAO::deleteJoueurById($_GET["id"]);
}

header('Location: index.php');
exit;
