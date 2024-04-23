<?php 
  include 'includes/login.php';
  $images = array();  // 画像ファイルのリストを格納する配列
  $num = 4; // 1ページに表示する画像の枚数

  // 画像フォルダから画像おファイル名を読み込む
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

    // 指定枚数ごとに画像ファイル名を分割
    $images = array_chunk($images, $num);
    // ページ数指定、基本は1ページ目を指す
    $page = 1;

    // GETでページ数が指定されていた場合
    if (isset($_GET['page']) && is_numeric($_GET['page'])){
      $page = intval($_GET['page']);  // GETでページ数を取得
      // $images[ページ数]は存在するかチェック
      if (!isset($images[$page-1])){
        $page = 1;
      }
    }

    // 画像表示
    foreach ($images[$page-1] as $img){
      echo '<div class="col-3">';
      echo '  <div class="card">';
      echo '    <a href="./album/'.$img.'" target="_blank"><img src="./album/'.$img.'" class="img-fluid"></a>';
      echo '  </div>';
      echo '</div>';
    }
    echo '</div>';

    // ページ数リンクを表示
    echo '<nav><ul class="pagination">';
    for ($i = 1; $i <= count($images); $i++){
      echo '<li class="page-item"><a class="page-link" href="album.php?page='.$i.'">'.$i.'</a></li>';
    }
    echo '</ul></nav>';
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
