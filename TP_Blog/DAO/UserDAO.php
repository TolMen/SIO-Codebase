<?php

class UserDAO
{
    public static function getAdmin()
    {

        $userAdmin = htmlspecialchars($_POST["login"]);
        $tableUser = DatabaseLinker::getConnexion();
        $userBDD = $tableUser->prepare('SELECT login, password FROM utilisateur WHERE login = ?');
        $userBDD->execute([$userAdmin]);
        $admin = $userBDD->fetch(PDO::FETCH_ASSOC);

        $password = htmlspecialchars($_POST["password"]);
        $hashPassword = hash('sha256', $password);

        if (!empty($hashPassword)) {
            if ($hashPassword == $admin["password"]) {
                echo "Bonjour";
                $_SESSION["login"] = $userAdmin;
                header('Location: dashboard.php');
                exit;
            }
        }
    }

    public static function getDeconnexion()
    {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
