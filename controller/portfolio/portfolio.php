<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

class ControllerPortfolio extends Controller {
  public function index() {
    $data = $this -> load -> language("common/home");
    $this -> load -> view("common/home", $data);
  }
}
