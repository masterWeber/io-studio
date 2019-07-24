<?php

class Registry {
  private $data = [];

  public function get($key) {
    if (isset($this -> data[$key])) {
      return $this -> data[$key];
    }

    return null;
  }

  public function set($key, $value) {
    $this -> data[$key] = $value;
  }

}
