<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Newtron\Core\Application\App;

App::create(dirname(__DIR__));

// Register any custom service providers here
// App::addServiceProvider($provider);

App::setErrorPage(404, 'not-found');

App::run();
