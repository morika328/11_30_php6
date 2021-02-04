<?php

// var_dump($_GET);
// exit();

include('functions.php');

$user_id = $_GET['user_id'];
$article_id = $_GET['article_id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM article_table LEFT OUTER JOIN (SELECT article_id, COUNT(user_id) AS cnt FROM like_table GROUP BY article_id) AS likes
ON article_table.article_id = likes.article_id';
// $sql = 'INSERT INTO like_table(like_id, user_id, article_id, created_at)VALUES(NULL, :user_id, :article_id, sysdate())'; // SQL作成
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':article_id', $article_id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $like_count = $stmt->fetch();
  // var_dump($like_count);
  // exit();
}

if ($like_count[0] != 0) {
  // データがあった場合
  $sql = 'DELETE FROM like_table WHERE user_id=:user_id AND article_id=:article_id';
} else {
  // データが無かった場合
  $sql = 'INSERT INTO like_table (like_id, user_id, article_id, created_at) VALUES (NULL, :user_id, :article_id, sysdate())';
}

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':article_id', $article_id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  header('Location:read.php');
}
