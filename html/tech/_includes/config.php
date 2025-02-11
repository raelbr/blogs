<?php
require_once('_env.php');

$host = isset($_env['DB_HOST']) ? $_env['DB_HOST'] : getenv('DB_HOST');
$db = isset($_env['DB_NAME']) ? $_env['DB_NAME'] : getenv('DB_NAME');
$user = isset($_env['DB_USER']) ? $_env['DB_USER'] : getenv('DB_USER');
$pass = isset($_env['DB_PASS']) ? $_env['DB_PASS'] : getenv('DB_PASS');
$port = isset($_env['DB_PORT']) ? $_env['DB_PORT'] : getenv('DB_PORT');

try {
  $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=utf8";
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (PDOException $e) {
  die("Database Error");
}

$post_img_url = "";
$root = isset($_env['SITE_ROOT']) ? $_env['SITE_ROOT'] : getenv('SITE_ROOT');
$imagePath = $root . '/images/';

$lang_dictionary = array(
  "en" => 1,
  "es" => 2,
  "fr" => 3,
  "br" => 4,
  "pt" => 4
);
$url_lang = explode('.', $_SERVER["HTTP_HOST"])[0];
$lang = isset($lang_dictionary[$url_lang]) ? $lang_dictionary[$url_lang] : 1;

$en_url = 'http://www.techzine.net';
$es_url = 'http://es.techzine.net';
$fr_url = 'http://fr.techzine.net';
$pt_url = 'http://pt.techzine.net';

?>