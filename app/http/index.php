<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/functions.php';

use components\SiteLoader;
use components\SiteParser;
use models\LotSearch;

$connection = new \db\Connection('mysql');
$model = new LotSearch();

if ($model->load($_POST)) {
    $parser = new SiteParser(new SiteLoader());
    $url = '/';
    if (!$parser->run($model)) {
       $url .= '?error=Лот не найден';
    }
    header('Location: ' . $url);
}

viewRender('lots');


