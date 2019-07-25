<?php

class ControllerCommonHeader extends Controller {
  public function index() {
    $data['menu'] = $this -> load -> controller('common/menu');

    return $this -> load -> view('common/header', $data);
  }
}
