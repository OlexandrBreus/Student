<?php

namespace App\models;
use Core\Orm\Select;

class Contacts
{
    public string $name = "users1";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["first_name", " create_at"])->setTableName($this->name)->setOrderFields(["first_name"])->setLimitFields(["10", "3"])->execute();
    }

}