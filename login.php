<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   
 <title>飲食店特化型SNS</title>
  </head>

<body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">メニュー</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">データ一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">エクスポート</a>
                </li>
            </ul>
        </div>
    </nav>   
<form action="login_act.php" method="POST" >
<fieldset class="formbox">
<div >
<div class="mx-auto">
<div class="d-flex align-items-center justify-content-center">
<div class="border col-5">
      <div class="form-group">
          <label>ログインID</label>
        <input type="text" class="form-control" name="mail">
      </div>

      <div class="form-group">
          <label>パスワード</label>
       <input type="text" class="form-control" name="password">
      </div>

    <div class="row center-block text-center">

        <div class="col-1">
        </div>


    <div class="col-5">
      <div class="form-group">
        <button type="submit" class="btn btn-primary ">ログイン</button>
      </div>
    </div>

    <div class="col-5">
      <div class="form-group">
      <a button type="button" class="btn btn-primary " href="register.php">新規ご登録はコチラ</a>
      </div>
    </div>

    </div>
</div>
</div>
</div>
</div>
</fieldset>
</form>

</body>

</html>