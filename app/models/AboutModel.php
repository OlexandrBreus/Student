<?php

namespace App\models;
use Core\Orm\Insert;
use Core\Orm\Select;

class AboutModel
{
    public string $tableName = "users";
    public function index()
    {
        $select = new Select();
       // return $select->setFields(["first_name", " create_at"])->setTableName($this->name)->setGroupFields(["first_name"])->setOrderFields(["create_at"])->setLimitFields(["10", "3"])->execute();
        return $select->setFields(["id", " last_name"])
            ->setTableName($this->tableName)
            ->setJoinFields(["users1" => "last_name"])
            ->execute();

    }

    public function addUser(array $data)
    {
        if (!empty($data['email']) && !empty($data['login']) && !empty($data['password']) && !empty($data['phone']) &&
            !empty($data['first_name']) && !empty($data['last_name'])){
            $insert = new Insert();
            $insert->setTableName($this->tableName)
                ->setColumns(['email', 'login', 'password', 'phone', 'first_name', 'last_name'])
                ->setValues([$data['email'], $data['login'], $data['password'], $data['phone'], $data['first_name'],
                    $data['last_name']])
                ->execute();
        }
    }

}
