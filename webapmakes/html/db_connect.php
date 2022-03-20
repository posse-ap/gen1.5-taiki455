<?php
$dsn = 'mysql:host=db;dbname=web-app;charset=utf8mb4;';
$user = 'taiki';
$password = 'password';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}
?>