<?php

class People
{
    public $name;

    public $dni;

    public function __construct($name = '', $dni = false)
    {
        $this->name = $name;
        $this->dni = $dni;
    }

}