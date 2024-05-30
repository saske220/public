<?php


// $title には１行目が入る


// $info = file_get_contents("info.txt");
        // ⇧ファイルからテキストデータを取ってくる
?>
<!doctype html>
<html lang="ja" >
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>

    <?php include('navbar.php'); ?>

    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->

        <h1>サークルサイト</h1>
        <?php
$fp = fopen("info.txt","r");

if ($fp) {
  //開けた時
  $title = fgets($fp);
  if($title) {
      // 読み込みできた時
      echo '<p><a href="info.php">' . $title . '</a></p>';
      // * まだ info.phpは作っていない
  } else {
      // 読み込みできなかった時
      echo '<p>お知らせはありません</p>';
  }
} else {
  //開けなかった時
  echo '<p>お知らせはありません</p>';
}
        fclose($fp);
        // ⇧ファイル処理を終えたら、fcloseで閉じる

        // nl2br: 改行を出す
        // nl2br(文字列, false)→ <br>
        // nl2br(文字列, true)→ <br />
        ?>
        <!-- 本文ここまで -->
        <!--
        教科書のサイトからダウンロードできるファイル
        source-8/8-2/index.php
        source-8/8-2/navbar.php
        この2つを持ってくる
        index.phpに file_get_contentsを書く

        p.161
        fopen ファイルを開く
        fgets ファイルから１行ずつ読み込む
        fclose ファイルを閉じる

        p.162 fopen
        fopen(ファイル名, モード)
        モードの詳細はp163

        ⇩読み込み専用で開く場合
        fopen("info.txt","r");

// p166 リスト9-4
// info.txtの一行目を表示する
// ファイルが空だった場合は、「お知らせはありません」

// info.phpを作る
// info.phpでは、全文を表示する
-->
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

