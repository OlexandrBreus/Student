<?php

namespace App\models;
use Core\Orm\Select;

class Contacts
{
    public string $name = "users1";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["email"])->setTableName($this->name)->execute();
    }

}