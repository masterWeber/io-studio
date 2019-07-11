<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

class Controller {
  public $load;

  public function __construct() {
    $this -> load = new Loader();
  }
}
