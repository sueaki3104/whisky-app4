<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- １６ボトル編集確認画面 mypageeditconfirmation-->
    <!-- 必要なのはmypageeditingで入力した内容をそのまま表示すること（表示のみ）
            あらかじめその枠にはDBから引っ張ってきたデータが入っている状態
            編集完了マイページへ戻るボタンの実装（マイページへ変遷 １４ mypage
            再編集ボタン（マイページの編集画面へ変遷 １５ mypageediting -->

      <a href={{ url("mypage") }}>マイページへ</a>
      <a href={{ url("mypageediting") }}>再編集する</a>


    mypageeditconfirmation

</body>

</html>
