<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- １３ボトル編集確認画面 editconfirmation-->
    <!-- 必要なのはbottleeditingで入力した内容をそのまま表示すること
            入力できる枠で あらかじめその枠にはDBから引っ張ってきたデータが入っている状態
            編集完了棚へ戻るボタンの実装（棚へ変遷 ⑨ shelves
            再編集ボタン（ボトルの編集画面へ変遷 １２ bottleediting -->




            <a href={{ url("shelves") }}>編集完了</a>
            <a href={{ url("bottleediting") }}>もう１度編集する</a>

    editconfirmation

</body>

</html>
