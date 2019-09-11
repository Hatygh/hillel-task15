<?php

require_once 'vendor/autoload.php';
require_once 'blade.config.php';

$title = 'Food';

echo $blade->make('index', [
    'title' => $title
]);

