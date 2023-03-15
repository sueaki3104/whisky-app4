<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- ⑥ホーム画面 home-->
    <!-- 必要なのは投稿ボタン（投稿画面 ⑦ posting へ変遷）
        投稿一覧ボタン（投稿画面 ⑧ messages へ変遷）
        棚へいくボタン（棚一覧画面 ⑨ shelves へ変遷）
        マイページに行くボタン （マイページ画面 １４ mypage へ変遷）-->

home



      <a href={{ url("posting") }}>投稿へ</a>
      <a href={{ url("messages") }}>投稿一覧へ</a>
      <a href={{ url("shelves") }}>ウィスキーの棚へ</a>
      <a href={{ url("mypage") }}>マイページへ</a>




</body>

</html>
