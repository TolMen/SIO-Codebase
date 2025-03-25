<?php

include_once("tools/DatabaseLinker.php");
include_once("DTO/DuelDTO.php");
include_once("DAO/DuelDAO.php");

if (!empty($_GET["id"])) {
   DuelDAO::deleteDuelById($_GET["id"]);
}

header('Location: index.php');
exit;
