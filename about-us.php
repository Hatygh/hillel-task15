<?php

require_once 'vendor/autoload.php';
require_once 'blade.config.php';

$title = 'About us';

echo $blade->make('about-us', [
    'title' => $title
]);