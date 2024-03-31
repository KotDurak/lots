<?php

namespace components;

use db\Connection;

class LotCreate
{
    public function create()
    {
        $connection = Connection::getConnection();
        $connection->runSql("");
    }
}