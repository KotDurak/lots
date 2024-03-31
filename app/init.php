<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/functions.php';

use db\Connection;

$connection = new Connection(Connection::MYSQL);
$sql = file_get_contents( __DIR__ . '/sql/lots.sql');
$connection->runSql($sql);

echo 'Таблица создана';
