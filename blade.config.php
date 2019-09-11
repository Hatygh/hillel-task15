<?php

$engineResolver = new \Illuminate\View\Engines\EngineResolver();

$filesystem = new \Illuminate\Filesystem\Filesystem();
$fileViewFinder = new \Illuminate\View\FileViewFinder(
    $filesystem, ['views']
);

$compiler = new \Illuminate\View\Compilers\BladeCompiler($filesystem, 'resources/cache');

$engineResolver->register('blade', function () use ($compiler) {
    return new \Illuminate\View\Engines\CompilerEngine($compiler);
});

$container = new \Illuminate\Container\Container();
$dispatcher = new \Illuminate\Events\Dispatcher($container);

$blade = new \Illuminate\View\Factory($engineResolver, $fileViewFinder, $dispatcher);

//$blade->make();