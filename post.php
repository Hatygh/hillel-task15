<?php

require_once 'vendor/autoload.php';
require_once 'blade.config.php';

$title = 'Post';

echo $blade->make('single-post', [
    'title' => $title
]);