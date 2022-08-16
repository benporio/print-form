<?php

require __DIR__.'//inc//autoload.php';

$data = json_decode($_POST['data']);

$printFormController = new FormController(
    ClassLoader::getInstance(
        StringUtil::uriToClassName(
            UriUtil::getUriPart($_SERVER['HTTP_REFERER'], 3)
        )
    )
);

$form = $printFormController->buildForm($data);

echo $form;