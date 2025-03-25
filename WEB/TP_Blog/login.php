<?php

session_start();


if (isset($_POST['login'])) {
    include_once "tools/DatabaseLinker.php";
    include_once 'DTO/UserDTO.php';
    include_once 'DAO/UserDAO.php';
    UserDAO::getAdmin();
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Connexion</title>
</head>

<body>
    <form action="" method="POST">

        <h1>Se connecter</h1>

        <label>Login</label>
        <input type="text" name="login" id="loginId">

        <label>Password</label>
        <input type="password" name="password" id="passwordId">

        <input type="submit" name="bouton" value="Connexion">

    </form>
</body>

</html>