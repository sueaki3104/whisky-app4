<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- 11 ボトル詳細画面 bottlelist-->
    <!-- 必要なのは棚の詳細ボタンを押したときにDBからデータを持ってくる仕様
            １から６はDBから表示
            １、ウィスキーの名前 ２、購入日 ３、購入場所 ４、買った値段 ５、思い出を書く
            ６、写真データ 写真がなければno image
            編集ボタンの実装（編集画面へ変遷 １２ bottleediting
            戻るボタン（棚一覧へ変遷 ⑨ shelves ）
            削除ボタン（データの削除）-->


      <a href={{ url("bottleeditin") }}>編集する</a>
      <a href={{ url("shelves") }}>棚へ戻る</a>
      <a href={{ url("") }}>削除</a>


    bottlelist

</body>

</html>
