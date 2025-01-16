<?php
function parse_get($var)
{
  return htmlspecialchars($_GET[$var]);
}

function format_date_time($string_date)
{
  $date = new DateTime($string_date);
  return $date->format('d/m/Y h:m:s');
}
function format_date_only($string_date)
{
  $date = new DateTime($string_date);
  return $date->format('d/m/Y');
}
function get_lang()
{
  return isset($GLOBALS["lang"]) ? $GLOBALS["lang"] : 1;
}
function translate($token)
{
  echo isset($GLOBALS["translate"][$token][get_lang()]) ? $GLOBALS["translate"][$token][get_lang()] : $token;
}
?>