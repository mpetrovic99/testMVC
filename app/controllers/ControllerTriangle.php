<?php

class ControllerTriangle extends ControllerBase {

  public function triangleCalculator() {

    $a = $this->dispatcher->getParam("a");
    $b = $this->dispatcher->getParam("b");
    $c = $this->dispatcher->getParam("c");

    $s = $a * $b / 2;
    $p = $a + $b + $c;

    $st = (object) [
      "type" => "triangle",
      "a" => $a,
      "b" => $b,
      "c" => $c,
      "surface" => $s,
      "circumference" => $p,
    ];

    return json_encode($st);

  }

}
