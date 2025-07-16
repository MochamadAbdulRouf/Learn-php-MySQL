<?php

$host = "localhost";
$port = "3306";
$database = "bigdata_v1";
$username = "root";
$password = "";

// cara koneksi ke database menggunakan php

try {
    $connection = new PDO("mysql::host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses Terkoneksi ke database MySQL" . PHP_EOL;

    // menutup koneksi database 
    $connection = null;
} catch (PDOException $exception) {
    echo "gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}

