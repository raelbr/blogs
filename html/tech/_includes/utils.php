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
?>