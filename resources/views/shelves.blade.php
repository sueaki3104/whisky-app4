<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- ⑨棚画面 shelves-->
    <!-- 必要なのは
            登録されているウィスキーの一覧表示
            メイン表示は写真データ 写真がなければno image
            写真のところに詳細ボタン実装（ボトルの画面へ１１ bottlelist へ変遷））
            新しいボトルの登録ボタンの実装（新規ボトル登録画面へ １０ newbottle へ変遷））
            ホームボタン（ホーム画面へ⑥ home へ変遷）-->

      <a href={{ url("bottlelist") }}>詳細へ</a>
      <a href={{ url("newbottle") }}>新規ボトル登録</a>
      <a href={{ url("home") }}>home</a>
    shelves

</body>

</html>
