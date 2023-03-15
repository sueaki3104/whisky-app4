<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- ⑧投稿一覧 messages-->
    <!-- 必要なのは
            所属する県の最新投稿が1番上にくる仕様
            投稿にはコメントが可能
            いいねボタン実装
            投稿画面へのボタンが必要（投稿画面へ⑦ posting へ変遷）
            ホームボタン（ホーム画面へ⑥ home へ変遷）-->

      <a href={{ url("posting") }}>投稿へ</a>
      <a href={{ url("home") }}>ホームへ</a>

    messages

</body>

</html>
