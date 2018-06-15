<?php

class ControllerCircle extends ControllerBase {

  public function circleCalculator () {

    $r = $this->dispatcher->getParam("r");
    $s = 2 * $r * pi();
    $p = 2 * $r * pi();

    $so = (object) [
      "type" => "circle",
      "radius" => $r,
      "surface" => $s,
      "circumference" => $p,
    ];

    return json_encode($so);

  }

}
