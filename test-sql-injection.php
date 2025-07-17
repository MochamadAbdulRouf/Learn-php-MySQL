<?php

// SQL INJECTION
/*
require_once __DIR__ . '/get-connection.php';

$connection = getConnection();

// contoh sql injection hanya dengan sebuah parameter dapat memanipulasi query yang dibawah
$username = "admin'; #";
$password = "salah";

//Query ini yang di manipulasi oleh parameter.Walau passwordnya salah tapi menggunakan parameter itu
//Maka siapapun tetap bisa login walau passwordnya tidak benar
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;
// Ouput SQL INJECTION walau password salah
*/

/*
D:\Laragon\laragon\www\php-database(master)
λ php test-sql-injection.php
Sukses login : admin
*/

// fix SQL INJECTION
require_once __DIR__ . '/get-connection.php';

$connection = getConnection();


$username = $connection->quote("admin'; #");
$password = $connection->quote("salah");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    $success = true;
    $find_user = $row["username"];
}

if($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;