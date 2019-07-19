<?php

class ControllerInformationPortfolio extends Controller {
  public function index() {
    $data = $this -> load -> language("information/portfolio");
    $this -> load -> view("information/portfolio", $data);
  }
}
