<?php

class URIParser {
  private $uriString;
  private $uriParts;
  private $lang;
  private $route;

  public function __construct() {
    $this -> uriString = $_SERVER['REQUEST_URI'];
  }

  public function parse() {

    $uri = mb_strtolower($this -> uriString);

    $this -> uriParts = explode('/', $uri);
    $this -> cleanUriParts();
    $this -> reindexUriParts();

    if ($this -> detectLang()) {
      $this -> lang = $this -> detectLang();
      $this -> route = $this -> detectRoute();
    } else {
      $this -> lang = Language::DEFAULT;
      $this -> route = $this -> uriParts;
    }

    $this -> reindexRoute();

    return [
      'lang' => $this -> lang,
      'route' => $this -> route
    ];
  }

  private function cleanUriParts() {
    $this -> uriParts = array_filter($this -> uriParts, function ($item) {
      return !empty($item);
    });
  }

  private function reindexUriParts() {
    $this -> uriParts = array_values($this -> uriParts);
  }

  private function reindexRoute() {
    $this -> route = array_values($this -> route);
  }

  public function detectLang() {

    if (key_exists(0, $this -> uriParts)) {
      foreach (Language::ALL_LANGUAGES as $lang) {
        if ($this -> uriParts[0] === $lang) {
          return $lang;
        }
      }
    }

    return false;
  }

  private function detectRoute() {
    return array_diff($this -> uriParts, [$this -> lang]);
  }
}
