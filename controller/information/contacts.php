<?php
if (!defined("ACCESS")) {
  header("location:/index.php");
}

class ControllerInformationContacts extends Controller {
  public function index() {
    print_r('ControllerCommonService');
  }
}
