<?php

/*
php -S localhost:8000 server.php
*/

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = urldecode($uri);

$requested = __DIR__.$uri;



if ($uri !== '/' and file_exists($requested))
{
    if(preg_match('/\.js$/', $uri))
    {
        header('Content-Type: text/javascript; charset=utf-8');
    }
    if(preg_match('/\.css$/', $uri))
    {
        header('Content-Type: text/css; charset=utf-8');
    }

    return false;
}

require_once __DIR__.'/index.php';
