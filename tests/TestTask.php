<?php
/**
 * Created by PhpStorm.
 * User: m97
 * Date: 20/09/18
 * Time: 19:43
 */

use PHPUnit\Framework\TestCase;

class TestTask extends PHPUnit_Framework_TestCase
{
    public function testTaskClass(){
        require_once('../tasks.php');

        $task = new Task('Comprar pa', false);

        $this->assertInstanceOf(expected);

    }
}
