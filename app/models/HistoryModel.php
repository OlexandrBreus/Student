<?php

namespace App\models;
use Core\Orm\Select;
use Core\Orm\Insert;

class HistoryModel
{
    public string $tableName = "users3";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["first_name", " update_at"])
            ->setTableName($this->tableName)
            ->setOrderFields(["first_name"])
            ->execute();
    }

    public function addUser(array $data)
    {
        if (!empty($data['email']) && !empty($data['login']) && !empty($data['password']) && !empty($data['phone']) &&
         $data['first_name'] && !empty($data['last_name'])){
            $insert = new Insert();
            $insert->setTableName($this->tableName)
                ->setColumns(['email', 'login', 'password', 'phone', 'first_name', 'last_name'])
                ->setValues([$data['email'], $data['login'], $data['password'], $data['phone'], $data['first_name'],
                    $data['last_name']])
                ->execute();
        }
    }
}