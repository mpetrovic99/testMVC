<?php
use Phalcon\Mvc\Application;
use Phalcon;

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Router;


$loader = new Loader();
$loader->registerDirs(
  array(
    APP_PATH . '/controllers/',
    APP_PATH . '/models/',
  )
)->register();

$router = new Router();


$router->add(
  "/:controller/a/:action/:params",
  [
    "controller" => "Triangle",
    "action"     => "triangleCalculator",
    "a" => 3,
    "b" => 4,
    "c" => 5,
  ]
);

$router->add(
  "/:controller/a/:action/:params",
  [
    "controller" => "Circle",
    "action" => "circleCalculator",
    "r" => 4,
  ]
);
