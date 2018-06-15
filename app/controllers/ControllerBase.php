<?php
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

  function calculateSumS () {

    $newCircle = new ControllerCircle();
    $newCircle->circleCalculator();
    $c = $newCircle->surface;

    $newTriangle = new ControllerTriangle();
    $newTriangle->triangleCalculator();
    $t = $newTriangle->surface;

    return ($t + $c);

  }

  function calculateSumP () {

    $newCircle = new ControllerCircle();
    $newCircle->circleCalculator();
    $c = $newCircle->circumference;

    $newTriangle = new ControllerTriangle();
    $newTriangle->triangleCalculator();
    $t = $newTriangle->circumference;

    return ($t + $c);

  }

}
