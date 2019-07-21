<?php

class Url {
  private $url;
  private $ssl;

  public function __construct(string $url, string $ssl = '') {
    $this -> url = $url;
    $this -> ssl = $ssl;
  }

  public function link(string $route) {
    if (!empty($this -> ssl)) {
      $url = $this -> ssl . $route;
    } else {
      $url = $this -> url . $route;
    }

    return $url;
  }
}
