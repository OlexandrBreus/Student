<?php

$connect = new PDO('mysql:host=localhost;dbname=myBase', 'root', '');

/*$sql_create = 'CREATE TABLE staff (id INT, name VARCHAR(200), email VARCHAR(60), age INT,
registration_date TIMESTAMP)';
$create = $connect->query($sql_create);
$create->execute();
*/

/*$sql_unique_index = 'CREATE UNIQUE INDEX email_index ON staff (email)';
$create_index = $connect->query($sql_unique_index);
$create_index->execute();
*/

/*$sql_index = 'CREATE INDEX age_index ON staff (age)';
$age_index = $connect->query($sql_index);
$age_index->execute();
*/

$sql = 'INSERT INTO `staff` (`name`, `email`, `age`, `registration_date`) VALUES ';
$sql .= "(?, ?, ?, ?)";
$values = [];
foreach ($_POST as $key=>$item){
    $values[] = $item;
}
$stm = $connect->prepare($sql);
$stm->execute($values);
