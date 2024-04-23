<?php
  include 'includes/login.php';
  $fp = fopen("info.txt", "r"); // ファイル読み込み
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

        <h1>お知らせ</h1>
<?php
  if ($fp){
    // ファイルが正しく開けたとき
    $title = fgets($fp);  // ファイルから1行読み込む
    if ($title){
      // 1行読み込めたとき
      echo '<p><a href="info.php">'.$title.'</a></p>';
    } else {
      // ファイルの中身が空だったとき
      echo '<p>お知らせはありません。</p>';
    }
    fclose($fp);  // ファイルを閉じる
  } else {
    // ファイルが開けなかったとき
    echo '<p>お知らせはありません。</p>';
  }
?>
        <!-- 本文ここまで -->
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
