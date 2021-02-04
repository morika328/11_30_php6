<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/input.css">
    <title>記事投稿画面</title>
</head>

<?php
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id();
?>

</html>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <form action="create_file.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      
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
        <input type="text" name="article">
      </div>
</div>

<div class="col-5">
      <div class="form-group">
        <button type="submit" class="btn btn-primary ">投稿する</button>
      </div>
    </div>

      <a href="read.php">投稿一覧</a>
      <a href="logout.php">ログアウト</a>

    </fieldset>
  </form> 
</body>
</html>