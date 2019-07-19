<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

class ControllerCommonService extends Controller {
  public function index() {
    print_r('ControllerCommonService');
  }
}
