<?php

class ControllerCommonFooter extends Controller {
  public function index() {
    return $this -> load -> view('common/footer');
  }
}
