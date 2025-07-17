<?php
/*
// Query SQL
require_once __DIR__ . '/get-connection.php';

$connection = getConnection();
// Query SQL dengan PDO
$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

// Foreach PDOStatement
foreach ($statement as $row){
    var_dump($row);
}


$connection = null;
*/

// V 2 yang di rekomendasikan
require_once __DIR__ . '/get-connection.php';

$connection = getConnection();
$sql = "SELECT id, name, email FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "id : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}


$connection = null;

