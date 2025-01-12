<?php
  function parse_get($var) {
    return htmlspecialchars($_GET[$var]);
  }

?>