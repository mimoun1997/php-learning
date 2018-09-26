<?php

class Task
{
    //POPIETATS
    public $name;

    public $completed;


    public function _construct($name = '', $comlpeted = false){

        $this->name = $name;
        $this->completed = $comlpeted;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo, 'tasks');
    }

}