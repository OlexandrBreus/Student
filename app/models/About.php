<?php

namespace App\models;

class About
{
    public function index()
    {

        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
        $sth = $dbh->query('SELECT * FROM users');
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        return $rows;

    }

}