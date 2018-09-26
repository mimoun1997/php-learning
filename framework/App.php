<?php
/**
 * Created by PhpStorm.
 * User: m97
 * Date: 26/09/18
 * Time: 17:41
 */

class App
{
    private static $registry = [];

    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }

    public function resolve($key){
        if (!array_key_exists($key,static::$registry)) throw new Exception("No $key found in registry");
        return static::$registry[$key];
    }
}