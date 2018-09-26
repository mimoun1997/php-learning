<?php
class Lesson
{
    public $name;


    /**
     * Lesson constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }


}