<?php

namespace db;

class Connection
{
    const MYSQL = 'mysql';

    private static $connection;

    private \PDO $pdo;
    public function __construct(string $config)
    {
        $this->initDb($config);
        self::$connection = $this;
    }

    public function runSql(string $sql)
    {
        $this->pdo->exec($sql);
    }

    public function getSql(string $sql):? array
    {
        $result = $this->pdo->query($sql);

        return $result->fetchAll();
    }

    public function initDb(string $dbName)
    {
        $configs = getConfigs('db');
        $current = $configs[$dbName];

        switch ($dbName) {
            case self::MYSQL:
                $this->pdo = new \PDO($current['dsn'], $current['user'], $current['password'], $current['options']);
                break;
            default:
                throw new \Exception('not db');
        }

    }

    public static function getConnection()
    {
        return self::$connection;
    }
}