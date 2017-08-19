<?php

use Invobox\Template\Controllers\ControllerFactory;
use Invobox\Template\Controllers\ErrorController;

if (PHP_SAPI == 'cli-server') {
	// To help the built-in PHP dev server, check if the request was actually for
	// something which should probably be served as a static file
	$url  = parse_url($_SERVER['REQUEST_URI']);
	$file = __DIR__ . $url['path'];
	if (is_file($file)) {
		return false;
	}
}

require __DIR__ . '/../vendor/autoload.php';

try {

    $controller = ControllerFactory::getInstance();

    $controller->getHeader();
    $controller->run();
    $controller->getFooter();

} catch (\Exception $e) {

    $controller = new ErrorController(500);

    $controller->getHeader();
    $controller->run();
    $controller->getFooter();

}
