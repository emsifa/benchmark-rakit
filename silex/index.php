<?php

require 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/foo', function() {
    return "Hello World";
});

$app->run();
