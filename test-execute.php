<?php

// Menjalankan execute ke database
require_once __DIR__ . '/get-connection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('rouf', 'Rouf', 'myzuqe@test.com');
SQL;

$connection->exec($sql);
$connection = null;

// ini adalah command prompt yang saya eksekusi dan berhasil mengexecute query di atas
/*
mysql> USE bigdata_v1
Database changed
mysql> SHOW TABLES;
+----------------------+
| Tables_in_bigdata_v1 |
+----------------------+
| customers            |
+----------------------+
1 row in set (0.00 sec)

mysql>
mysql> SELECT * FROM customers;
+------+------+------------------+
| id   | NAME | email            |
+------+------+------------------+
| rouf | Rouf | myzuqe@test.com  |
+------+------+------------------+
1 row in set (0.00 sec)

mysql>
*/

// error ini terjadi jika kita execute value yang sama lagi
/*
D:\Laragon\laragon\www\php-database(master)
λ php test-execute.php

Fatal error: Uncaught PDOException: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abdul' for key 'customers.PRIMARY' in D:\Laragon\laragon\www\php-database\test-execute.php:13
Stack trace:
#0 D:\Laragon\laragon\www\php-database\test-execute.php(13): PDO->exec('    INSERT INTO...')
#1 {main}
  thrown in D:\Laragon\laragon\www\php-database\test-execute.php on line 13
*/