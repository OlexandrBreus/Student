<?php

namespace App\models;
use Core\Orm\Select;

class Gallery
{
    public string $name = "users2";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["phone"])->setTableName($this->name)->execute();
    }

}