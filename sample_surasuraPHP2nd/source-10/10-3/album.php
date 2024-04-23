<?php 
  $images = array();  // 画像ファイルのリストを格納する配列

  // 画像フォルダから画像のファイル名を読み込む
  if ($handle = opendir('./album')){
    while ($entry = readdir($handle)){
      // 「.」および「..」でないとき、ファイル名を配列に追加
      if ($entry != "." && $entry != ".."){
        $images[] = $entry;
      }
    }
    closedir($handle);
  }
?>
<!doctype html>
<html lang="ja">
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>

    <?php include('navbar.php'); ?>

    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->

        <h1>アルバム</h1>
<?php
  if (count($images) > 0){
    echo '<div class="row">';
    foreach ($images as $img){
      echo '<div class="col-3">';
      echo '  <div class="card">';
      echo '    <a href="./album/'.$img.'" target="_blank"><img src="./album/'.$img.'" class="img-fluid"></a>';
      echo '  </div>';
      echo '</div>';
    }
    echo '</div>';
  } else {
    echo '<div class="alert alert-dark" role="alert">画像はまだありません。</div>';
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
