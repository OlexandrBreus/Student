<?php

namespace App\models;

class Gallery
{
    public function index()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
        $sth = $dbh->query('SELECT * FROM users2');
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }

}