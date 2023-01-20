<?php

namespace Mentor_task;
require 'iImport.php';
use Mentor_task\iImport;
use PDO;


class DbImport implements iImport
{

    public function dataInsert(array $data)
    {
        //INSERT INTO `persons` (`name`, `age`, `email`) VALUES ('John', 'Smith', 24, 'john@test.com')
        $sql = 'INSERT INTO `persons`(`name`, `age`, `email`) VALUES';
        foreach ($data as $k => $datum){
                $sql .= "('" . $datum['name'] . "', " . $datum['age'] . ", '" . $datum['email'] . "'),";
            }
        $sql = rtrim($sql, ',');
    $connect = $this->dbConnect();
    $connect->query($sql);
    }

    private function dbConnect()
    {
        try {
            $connect = new PDO('mysql:host=localhost;dbname=myBase', 'root', '');
            return $connect;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
}

