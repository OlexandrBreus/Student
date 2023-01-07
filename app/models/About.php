<?php

namespace App\models;
use Core\Orm\Select;

class About
{
    public string $name = "users";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["id"])->setTableName($this->name)->execute();


    }

}