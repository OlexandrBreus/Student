<?php

namespace App\models;
use Core\Orm\Select;

class Gallery
{
    public string $name = "users2";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["email", " first_name"])->setTableName($this->name)->setGroupFields(["first_name"])->execute();
    }

}