<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- ⑦投稿画面 posting-->
    <!-- 必要なのは
            テキストボックス（字数制限）
            写真アップロードボタン（１枚のみ）
            投稿ボタン（投稿画面へ⑧ messages へ変遷）
            ホームボタン（ホーム画面へ⑥ home へ変遷）-->
        <div class="input">
          入力枠: <br>  <input type="text" name="posting" placeholder="例：山崎" style="width:200px;">
        </div>



      <a href={{ url("messages") }}>投稿完了</a>
      <a href={{ url("home") }}>ホームへ</a>
    posting

</body>

</html>
