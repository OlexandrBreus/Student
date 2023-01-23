<?php

require 'DbImport.php';
require 'ReportImport.php';
//use Mentor_task\DbImport;
//use Mentor_task\iImport;


$data = [
    ['name' => 'Adam', 'age' => 31, 'email' => 'adam@test.com'],
    ['name' => 'Mike', 'age' => 37, 'email' => 'mike@test.com'],
    ['name' => 'Sara', 'age' => 30, 'email' => 'sara@test.com'],
    ['name' => 'Pamela', 'age' => 39, 'email' => 'pamela@test.com'],
    ['name' => 'Ann', 'age' => 27, 'email' => 'ann@test.com'],
];

$dbImport = new \Mentor_task\DbImport();
$dbImport->dataInsert($data);

$report = new \Mentor_task\ReportImport();
$report->dataInsert($data);




