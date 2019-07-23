<?php

class ControllerError404 extends Controller {
  public function index() {
    $data = $this -> load -> language("error/404");
    $this -> load -> view("error/404", $data);
  }
}
