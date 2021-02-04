<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録画面</title>
</head>

<body>
  <form action="register_act.php" method="POST">
    <fieldset>
      <legend>新規アカウント登録</legend>
      <div>
        お名前(姓): <input type="text" name="lastname">
      </div>
      <div>
        お名前(名): <input type="text" name="firstname">
      </div>
      <div>
        メールアドレス: <input type="text" name="mail">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>
      <div>
        <button>アカウント作成</button>
      </div>
      <a href="login.php">ログイン画面へ</a>
    </fieldset>
  </form>

</body>

</html>