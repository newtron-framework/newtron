<?php
declare(strict_types=1);

use Newtron\Core\Application\App;
use Newtron\Core\Http\Response;
use Newtron\Core\Routing\FileRoute;

class Test extends FileRoute {
  public function get(string $name): array {
    return [
      'name' => $name,
    ];
  }

  public function render(mixed $data): mixed {
    return Response::create(
      "Path requested: " . App::getRequest()->getPath() . 
        "\n<p>Route data:</p><pre>" . print_r($data, true) . "</pre>" . 
        "\n<p>Config:</p><pre>" . print_r(App::getConfig()->all(), true) . "</pre>"
    );
  }
}

return [
  new Test(),
  [
    'middleware' => [],
  ],
];
