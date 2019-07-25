<?php

class ControllerCommonMenu extends Controller {
  public function index() {
    $data = $this -> load -> language('common/menu');

    $data['link_portfolio'] = $this -> url -> link('portfolio');
    $data['link_service'] = $this -> url -> link('service');
    $data['link_contacts'] = $this -> url -> link('contacts');

    return $this -> load -> view('common/menu', $data);
  }
}
