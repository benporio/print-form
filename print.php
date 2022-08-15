<?php

require __DIR__.'//autoload.php';

$uri = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
$uri = explode( '/', $uri );

$data = json_decode($_POST['data']);

echo ClassLoader::getInstance(StringUtil::uriToClassName($uri[3]))->echoName();