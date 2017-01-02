<?php

require('vendor/autoload.php');

$app = new Rakit\Framework\App('benchmark');
$app->get('/foo', function() {
    return 'Hello World';
});
$app->run();
