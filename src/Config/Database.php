<?php

namespace MVC\src\Config;

use PDO;

class Database
{
    private static $bdd = null;

    public function __construct()
    {

    }

    public static function getBdd()
    {
        if (is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=training_mvc", 'root', '');
            // self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$bdd;
    }
}
