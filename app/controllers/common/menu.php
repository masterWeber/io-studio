<?php

class ControllerCommonMenu extends Controller {
  public function index() {
    $data = $this -> load -> language('common/menu');

    return $this -> load -> view('common/menu', $data);
  }
}
