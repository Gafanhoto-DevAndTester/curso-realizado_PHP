<?php

namespace App\Config;

class Database
{
    public static $driver = "mysql";

    public static function staticEcho()
    {
        echo "<h3>Hello World from static mehod!</h3><br/><br/>";
    }

}