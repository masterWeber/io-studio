<?php

class ControllerInformationContacts extends Controller {
  public function index() {
    $data = $this -> load -> language("information/contacts");
    $this -> load -> view("information/contacts", $data);
  }
}
