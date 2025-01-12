<?php

  $host = getenv('DB_HOST');
  $db = getenv('DB_NAME');
  $user = getenv('DB_USER');
  $pass = getenv('DB_PASS');

  try {
      $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
      $pdo = new PDO($dsn, $user, $pass, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);
  } catch (PDOException $e) {
      die("Database Error");
  }

  $post_img_url = "";
  $lang = "en";
  $root = '/tech';
  
?>