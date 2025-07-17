<?php

function getConnection(): PDO

// Mendapatkan koneksi database MySQL
{
     $host = "localhost";
     $port = "3306";
     $database = "bigdata_v1";
     $username = "root";
     $password = "";

     return new PDO("mysql::host=$host:$port;dbname=$database", $username, $password);
}

