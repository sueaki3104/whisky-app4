<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_10_register.css">
  <title>新規ユーザ登録画面</title>
</head>

<body>
    <!-- ③新規登録画面 register-->
    <!-- ID（メアド）とPASSとニックネームを入力する枠と
    20歳以上チェックボックスの枠が必要 所属する県（ここはプルダウン形式） -->
    <!-- メアドの確認へボタンが必要 ④ mail へ画面変遷-->



<form action="whisky_11_register_act.php" method="POST">
    <fieldset>
      <legend>新規ユーザー登録画面</legend>
      <div>
        登録するメールアドレス: <input type="text" name="mailaddress">
      </div>
      <div>
        登録するパスワード: <input type="text" name="password">
      </div>
      <div>
        パスワード２回目入力: <input type="text" name="password2">
      </div>
        ニックネーム: <input type="text" name="nickname">
      </div>
      <div>
        所属する都道府県を選んでください: <input type="text" name="nickname">
      </div>

      <!-- 登録するメアドに確認メールを送る -->
      <a href={{ url("login") }}>ログイン画面へ戻る</a>
    </fieldset>
  </form>

</body>

</html>
