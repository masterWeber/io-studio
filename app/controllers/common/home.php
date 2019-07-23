<?php

class ControllerCommonHome extends Controller {
  public function index() {
    $data = $this -> load -> language("common/home");

    $data['lang_link'] = '/en/';
    $data['lang_checked'] = '';

    $this -> load -> view("common/home", $data);
  }
}
