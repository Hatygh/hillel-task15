<?php

require_once 'vendor/autoload.php';
require_once 'blade.config.php';

$title = 'Blog';

echo $blade->make('archive-blog', [
    'title' => $title
]);