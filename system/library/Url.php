<?php

class Url {
  private $url;
  private $ssl;

  public function __construct($url, $ssl = false) {
    $this -> url = $url;
    $this -> ssl = $ssl;
  }

  public function link($route) {
    if ($this -> ssl) {
      $url = $this -> ssl . $route;
    } else {
      $url = $this -> url . $route;
    }

    return $url;
  }
}
