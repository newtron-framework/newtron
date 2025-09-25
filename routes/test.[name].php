<?php
declare(strict_types=1);

use Newtron\Core\Application\App;
use Newtron\Core\Http\Response;
use Newtron\Core\Quark\Quark;
use Newtron\Core\Routing\FileRoute;

class Test extends FileRoute {
  public function get(string $name): array {
    return [
      'name' => $name,
    ];
  }

  public function render(mixed $data): mixed {
    App::getDocument()->setTitle('Demo');

    $data['data'] = $data;
    $data['config'] = App::getConfig()->all();

    return Response::create(
      Quark::render('test', $data)
    );
  }
}

return [
  new Test(),
  [
    'middleware' => [],
  ],
];
