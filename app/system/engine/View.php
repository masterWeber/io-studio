<?php

class View {

  public function load($route) {
    $path = DIR_VIEW . "/$route.php";

    if (file_exists($path)) {
      require_once($path);
    }
  }
}
