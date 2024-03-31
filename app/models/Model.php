<?php

namespace models;

abstract class Model
{
    public function load(array $data): bool
    {
        $loaded = false;

        foreach ($data as $field => $value) {
            $this->{$field} = trim($value);
            $loaded = true;
        }

        return  $loaded;
    }
}