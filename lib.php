<?php
function include_get_params($file) {
  $parts = explode('?', $file);
  if (isset($parts[1])) {
    parse_str($parts[1], $output);
    foreach ($output as $key => $value) {
      $_GET[$key] = $value;
    }
  }
  include($parts[0]);
}
?>