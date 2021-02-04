<?php
session_start();
include("functions.php");
check_session_id();

// DB接続
$pdo = connect_to_db();

// var_dump($_SESSION);
// exit();

// ユーザid取得
$user_id = $_SESSION['user_id'];

// データ取得SQL作成
// $sql = 'SELECT * FROM todo_table'; // <- select文を変更
$sql = 'SELECT * FROM article_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
  // fetchAll()関数でSQLで取得したレコードを配列で取得できる
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
  $output = "";

  

  // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
  // `.=`は後ろに文字列を追加する，の意味
  foreach ($result as $record) {
        $output .= "<tr>";
    $output .= "<td>{$record["article"]}</td>";
    $output .= "<td><a href='like_create.php?user_id={$user_id}&article_id={$record["article_id"]}'>like{$record["cnt"]}</a></td>";
    $output .= "<td><a href='edit.php?article_id={$record["article_id"]}'>edit</a></td>";
    $output .= "<td><a href='delete.php?article_id={$record["article_id"]}'>delete</a></td>";
    // 画像出力を追加しよう
    $output .= "<td><img src='{$record["image"]}' height='150px'></td>";
    $output .= "</tr>";

  }
  // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>記事一覧画面</title>
</head>

<body>
  <fieldset>
    <legend>投稿記事一覧</legend>
    <a href="input.php">記事投稿画面へ</a>
    <a href="logout.php">ログアウト</a>
    <table>
      <thead>
        <tr>
          <th>記事</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>