<?php
declare(strict_types=1);

use Newtron\Core\Application\App;
use Newtron\Core\Http\Response;
use Newtron\Core\Quark\Quark;
use Newtron\Core\Routing\FileRoute;

class Welcome extends FileRoute {
  public function get(): void {
    return;
  }

  public function render(mixed $data): mixed {
    App::getDocument()->setTitle('Welcome to Newtron');

    return Response::create(
      Quark::render('welcome')
    );
  }
}

return [
  new Welcome(),
  [
    'middleware' => [],
  ],
];
