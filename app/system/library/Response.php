<?php


class Response {
  private $headers = [];
  private $output;

  public function addHeader(string $header) {
    $this -> headers[] = $header;
  }

  public function redirect(string $url, int $status = 302) {
    header('Location: ' . $url, true, $status);
    exit();
  }

  public function getOutput() {
    return $this -> output;
  }

  public function setOutput(string $output) {
    $this -> output = $output;
  }

  public function output() {
    if ($this -> output) {

      //Проверяем, были ли отправлены заголовки
      if (!headers_sent()) {
        foreach ($this -> headers as $header) {
          header($header, true);
        }
      }

      echo $this -> output;
    }
  }
}
