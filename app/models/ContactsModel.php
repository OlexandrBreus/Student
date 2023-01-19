<?php

namespace App\models;
use Core\Orm\Insert;
use Core\Orm\Select;

class ContactsModel
{
    public string $tableName = "users1";
    public function index()
    {
        $select = new Select();
        return $select->setFields(["first_name", " create_at", "last_name"])
            ->setTableName($this->tableName)
            ->setOrderFields(["first_name", "last_name"])
            ->setLimitFields(["10", "3"])
            ->execute();
    }

    public function addUserContacts(array $data)
    {
        if (!empty($data['email']) && !empty($data['login']) && !empty(['password']) && !empty(['phone'])
            && !empty($data['first_name']) && !empty($data['last_name'])){
            $insert = new Insert();
            $insert->setTableName($this->tableName)
                ->setColumns(['email', 'login', 'password', 'phone', 'first_name', 'last_name'])
                ->setValues([$data['email'], $data['login'], $data['password'], $data['phone'], $data['first_name'],
                    $data['last_name']])
                ->execute();
        }
    }



}