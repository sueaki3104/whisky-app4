<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- １５マイページ編集画面 mypageediting-->
    <!-- 必要なのはDBからユーザーの情報を引っ張って来て表示して、入力ができること
            必要情報 １メアド ２PASS ３ニックネーム ４所属県（ここはプルダウン形式）
            編集完了ボタンの実装（編集完了画面へ変遷 １６ mypageeditconfirmation
            戻るボタン（マイページ画面へ変遷 １４ mypage-->



      <a href={{ url("mypageeditconfirmation") }}>編集完了</a>
      <a href={{ url("mypage") }}>戻る</a>

      mypageediting

</body>

</html>
