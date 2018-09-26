<?php
/**
 * Created by PhpStorm.
 * User: m97
 * Date: 25/09/18
 * Time: 19:17
 */

class Router
{
    private static $routes = [];

    public static function routes()
    {
        return self::$routes;
    }

    public static function define($routes)
    {
        self::$routes= $routes;
    }

    public static function direct($uri = null)
    {
        if (!$uri) return 'app/controllers/tasks.php';

        //      NO ESTATIC  $this->routes; STATIC self::$routes
        if (array_key_exists($uri,self::$routes)) return self::$routes[$uri];
        throw new Exception('ERROR 404 . PÀGINA NO EXISTEIX.');
    }
}