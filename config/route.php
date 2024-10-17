<?php

use support\Request;
use Triangle\Router;

Router::disableDefaultRoute();

Router::any('/hello/{name}', function (Request $request, string $name) {
    return response("Привет, $name!");
});

Router::fallback(fn() => view('index'));
