<?php
$dsn = 'mysql:host=db;dbname=web_app;charset=utf8mb4;';
$user = 'taiki';
$password = 'password';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $db2 = new PDO($dsn, $user, $password);
  $db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $db3 = new PDO($dsn, $user, $password);
  $db3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $db4 = new PDO($dsn, $user, $password);
  $db4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}
?>