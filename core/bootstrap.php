<?php

use App\Core\App;
use App\Core\QueryBuilder;
use App\Core\Connection;

App::bind('config', require 'config.php');

$config = App::get('config');

App::bind(
    'database',
    new QueryBuilder(Connection::make(App::get('config')['database']))
);

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    return header("Location: /test/{$path}");
}
