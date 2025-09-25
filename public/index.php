<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Newtron\Core\Application\App;

App::create(dirname(__DIR__));

// Register any custom service providers here
// App::addServiceProvider($provider);

App::setErrorPage(404, 'not-found');

$am = App::getAssetManager();
$am->registerStylesheet('global', '/style.css');
$am->useStylesheet('global');

App::run();
