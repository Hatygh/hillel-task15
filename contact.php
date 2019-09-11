<?php

require_once 'vendor/autoload.php';
require_once 'blade.config.php';

$title = 'Contacts';

echo $blade->make('contact', [
    'title' => $title
]);