<?php

require __DIR__."/../vendor/autoload.php";
$self = isset($_SERVER['PHP_SELF']) ? str_replace('/public_html/index.php', '', $_SERVER['PHP_SELF']) : '';

$uri = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
use Core\Routes\Router;


$app = new Router();

$app->get("/blog/(\w+)/update",function($teste){

    echo $teste;

});


$app->run($_SERVER['REQUEST_URI'],$app->method());