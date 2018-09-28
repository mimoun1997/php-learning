<?php

class Connection {
    public static function connect()
    {
//        $config = App::resolve('config');
//        var_dump($config);
//        $database = config('database');
//        var_dump($database);
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=tasques','debian-sys-maint','znx3bZvss6oC0Mpp');
//            return new PDO("$database{'type'}:host=127.0.0.1;dbname=php_learning','debian-sys-maint','znx3bZvss6oC0Mpp");
//            return new PDO('mysql:host=127.0.0.1;dbname=tasques','debian-sys-maint','znx3bZvss6oC0Mpp');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}