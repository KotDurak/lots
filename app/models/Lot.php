<?php

namespace models;

use db\Connection;

class Lot extends Model
{

    public function __construct(
        public string $url,
        public string $description,
        public float $price,
        public string $email,
        public string $phone,
        public string $inn,
        public string $bankrotDeal,
        public string $date
    )
    {
        $this->date = date('Y-m-d H:i:s', strtotime($this->date));
    }

    public function save()
    {
        $values = $this->getValuesStr();

        $connection = Connection::getConnection();
        $connection->runSql(
            "INSERT INTO lots (url, description, price, email, phone, inn, bankruptcy_number, date_auction)"
             . "VALUES ($values)"
        );
    }

    private function getValuesStr(): string
    {
        $attrs = [
            $this->url,
            $this->description,
            $this->price,
            $this->email,
            $this->phone,
            $this->inn,
            $this->bankrotDeal,
            $this->date
        ];

        $values = array_map(function($attr) {
            return "'$attr'";
        }, $attrs);

        return implode(',', $values);
    }


    public static function getAll(): array
    {
        $connection = Connection::getConnection();

        return $connection->getSql("SELECT * FROM lots");
    }
}