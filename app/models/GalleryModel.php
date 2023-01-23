<?php

namespace App\models;
use Core\Orm\Insert;
use Core\Orm\Select;

class GalleryModel
{
    public string $tableName = "users2";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["email", " first_name", "last_name"])
            ->setTableName($this->tableName)
            ->setWhere(["first_name='ann'", "OR", "last_name='moon'"])
            ->setGroupFields(["first_name", "last_name"])
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