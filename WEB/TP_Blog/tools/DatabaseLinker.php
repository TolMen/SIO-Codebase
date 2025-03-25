<?php

class DatabaseLinker
{

    private static $url = "mysql:host=localhost;dbname=tpBlogBDD;charset=utf8";
    private static $username = "root";
    private static $password = "";


    public static function getConnexion()
    {
        return new PDO(self::$url, self::$username, self::$password);
    }
}

