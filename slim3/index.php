<?php

require('vendor/autoload.php');

$app = new Slim\App();
$app->get('/foo', function($req, $res, $args) {
    echo "Hello World";
});

$app->run();
