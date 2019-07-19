<?php

class ControllerCommonHome extends Controller {
  public function index() {
    $data = $this -> load -> language("common/home");
    $this -> load -> view("common/home", $data);
  }
}
