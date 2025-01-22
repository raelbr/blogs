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
$lang = 1;
$root = isset($_env['SITE_ROOT']) ? $_env['SITE_ROOT'] : getenv('SITE_ROOT');

$lang_dictionary = array(
  "1" => "en",
  "2" => "es",
  "3" => "pt-br",
);

?>