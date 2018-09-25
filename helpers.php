<?php
function direct($uri){



    $routes = [
        'tasks' => 'tasks.php',
        'people' => 'people.php',
        'lessons' => 'lessons.php',
        'about' => 'about.php',
        'contact' => 'contact.php',

    ];

    if (array_key_exists($uri, $routes)) {
        return $routes[$uri];

    } else {
        throw new Exception('La pàgina que demaneu no existeix');
    }



}