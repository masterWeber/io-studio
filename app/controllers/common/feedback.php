<?php

class ControllerCommonFeedback extends Controller {
  public function index() {
    return $this -> load -> view('common/feedback');
  }
}
