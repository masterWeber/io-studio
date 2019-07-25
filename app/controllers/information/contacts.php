<?php

class ControllerInformationContacts extends Controller {
  public function index() {
    $data['header'] = $this -> load -> controller('common/header');
    $data['feedback'] = $this -> load -> controller('common/feedback');
    $data['footer'] = $this -> load -> controller('common/footer');

    $output = $this -> load -> view("information/contacts", $data);
    $this -> response -> setOutput($output);
  }
}
