<?php
require_once("lang.php");

function parse_get($var)
{
  return htmlspecialchars($_GET[$var]);
}

function format_date_time($string_date)
{
  $date = new DateTime($string_date);
  return $date->format('d/m/Y h:m:s');
}
function get_lang()
{
  return isset($GLOBALS["lang"]) ? $GLOBALS["lang"] : 1;
}
function translate($token)
{
  echo isset($GLOBALS["translate"][$token][get_lang()]) ? $GLOBALS["translate"][$token][get_lang()] : $token;
}
$lang_date_only_formats = array(
  1 => 'm/d/Y',
  2 => 'd/m/Y',
  3 => 'd/m/Y',
  4 => 'd/m/Y',
);
function get_format_by_lang() {
  $lang = get_lang();
  $lang_date_only_formats = $GLOBALS["lang_date_only_formats"];
  $format = null != $lang_date_only_formats[$lang] ? $lang_date_only_formats[$lang] : $lang_date_only_formats[1];
  return $format;
}
function format_date_only($string_date)
{
  $date = new DateTime($string_date);
  $format = get_format_by_lang();
  return $date->format($format);
}
?>