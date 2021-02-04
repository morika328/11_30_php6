<?php
// 送信データのチェック
// var_dump($_GET);
// exit();
session_start();

// 関数ファイルの読み込み
include("functions.php");
check_session_id();

$article_id = $_GET["article_id"];

$pdo = connect_to_db();

// データ取得SQL作成
$sql = 'SELECT * FROM article_table WHERE article_id=:article_id';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':article_id', $article_id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は指定の11レコードを取得
  // fetch()関数でSQLで取得したレコードを取得できる
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿記事編集画面</title>
</head>

<body>
  <form action="update.php" method="POST">
    <fieldset>
      <legend>投稿記事編集</legend>
      <a href="read.php">記事一覧へ</a>

<div class="col-5">
      <div class="form-group">
          <label for="example">
              写真を選択する      
          <input type="file" name="upfile" accept="image/*"  multiple >
          </label>
      </div>

<!-- style="display:none;" -->
      <div class="form-group">
        <label for="article">文書を書く</label>
        <input type="text" name="article" value="<?= $record["article"] ?>" >
      </div>
</div>

<div class="col-5">
      <div class="form-group">
        <button type="submit" class="btn btn-primary ">投稿する</button>
      </div>
    </div>
      <input type="hidden" name="id" value="<?= $record["article_id"] ?>">

  </fieldset>
  </form>

</body>

</html>