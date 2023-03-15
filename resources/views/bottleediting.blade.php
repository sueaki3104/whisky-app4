<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style_7_login.css">
  <title></title>
</head>

<body>
    <!-- １２ボトル編集画面 bottleediting-->
    <!-- 必要なのは
            入力できる枠で あらかじめその枠にはDBから引っ張ってきたデータが入っている状態
            １、ウィスキーの名前 ２、購入日 ３、購入場所 ４、買った値段 ５、思い出を書く
            ６、写真データ 写真がなければno image
            編集完了ボタンの実装（編集完了画面へ変遷 １３ editconfirmation ）
            戻るボタン（ボトル詳細へ変遷 １１ bottlelist -->

      <a href={{ url("TopPage") }}>home</a>
    bottleediting


  <form action="./whisky_5_update.php" method="POST">
    <fieldset>
      <legend>購入したウィスキーの編集画面</legend>
      <a href="./whisky_3_read.php">一覧画面</a>
      <div class="input">
          購入日 :<br> <input type="date" name="date_of_purchase" style="width:200px;" value="<?= $record['date_of_purchase'] ?>">
        </div>
        <div class="input">
          蒸留所名（ブランド）: <br>  <input type="text" name="distillery_name" style="width:200px;" value="<?= $record['distillery_name'] ?>">
        </div>
        <div class="input">
          ウィスキー名: <br>  <input type="text" name="whisky_name" style="width:200px;" value="<?= $record['whisky_name'] ?>">
        </div>
        <div class="input">
          熟成年数:  <br> <input type="text" name="whisky_age" style="width:200px;" value="<?= $record['whisky_age'] ?>">
        </div>
        <div class="input">
          購入店名:  <br> <input type="text" name="place" style="width:200px;" value="<?= $record['place'] ?>">
        </div>
        <div class="input">
          購入本数:  <br> <input type="number" name="how_many" style="width:200px;" value="<?= $record['how_many'] ?>">
        </div>
        <div class="input">
          値段（税込）:  <br> <input type="number" name="price" style="width:200px;" value="<?= $record['price'] ?>">
        </div>
        <div class="input">
          想い出:  <br> <textarea name="memory" style="width:200px;" style="height:400px;"><?php echo $record['memory']; ?></textarea>
        </div>

      <input type="hidden" name="id" value="<?= $record['id'] ?>">
      <div>
        <button>編集登録</button>
      </div>
    </fieldset>
  </form>



      <a href={{ url("editconfirmation") }}>編集完了</a>
      <a href={{ url("bottlelist") }}>１つ前へ戻る</a>


</body>

</html>
