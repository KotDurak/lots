<?php

function getConfigs(string $name) {
    return require  __DIR__ . '/config/' . $name . '.php';
}

function viewRender(string $name) {
    require  __DIR__ . '/views/' . $name . '.php';
}