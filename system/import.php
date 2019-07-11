<?php
function import($path = "") {
  if ($path == "") {
    $report = $_SESSION['imports'];
    foreach ($report as &$item) {
      $item = array_flip($item);
    }
    return $report;
  }

  if (substr($path, -1) != "*")
    $path .= ".php";

  $imports = &$_SESSION['imports'];
  if (!is_array($imports)) {
    $imports = [];
  }

  $control = &$imports[$_SERVER['SCRIPT_FILENAME']];
  if (!is_array($control)) {
    $control = [];
  }

  foreach (glob($path) as $file) {
    if (is_dir($file)) {
      import($file . "/*");
      continue;
    }
    if (array_key_exists($file,$control)) {
      continue;
    }
    $control[$file] = count($control);
    require_once($file);
  }

  return true;
}
