<?php

namespace App\models;
use Core\Orm\Select;

class About
{
    public string $name = "users";
    public function index()
    {
        $select = new Select();
       // return $select->setFields(["first_name", " create_at"])->setTableName($this->name)->setGroupFields(["first_name"])->setOrderFields(["create_at"])->setLimitFields(["10", "3"])->execute();
        return $select->setFields(["id", " last_name"])->setTableName($this->name)->setJoinFields(["users1" => "last_name"])->execute();
    }

}
