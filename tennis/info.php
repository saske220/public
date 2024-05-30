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
        // p168 9-5
$fp = fopen("info.txt","r");
$line = array(); // 表示データを入れる配列
$body = ''; //本文を入れる変数

if ($fp) {
  //開けた時
  // ファイルを全部（＝最後の行まで）読みたい
  // feof関数: ファイルの終わりまで来たかどうか？を判定する関数
  // ! は否定
  // !feof = ファイルの終わりではない
  while (!feof($fp)) { // !feof($fp) ファイルの終わりではない間
    $line[] = fgets($fp);
    // ⇧配列に１行ずつ格納する
  }
} else {
    fclose($fp);
    // ⇧ファイル処理を終えたら、fcloseで閉じる
}
        ?>

        <?php
        // p169 9-6 表示する
        // $lineにデータが入っているので、表示したい
        // for(最初の一回; 終了する条件; 各ループ終了時の処理)
        //             countは、配列の要素の数を数える    
        if (count($line) > 0) {
            for($i = 0; $i < count($line); $i++ ) {
                if ($i == 0) {
                // お知らせの1行目はh2で囲む
                    echo '<h2>' . $line[0] . '</h2>';
                } else {
                // 2行目〜は、普通のテキストで表示する
                    $body .= $line[$i] . '<br>';
                }
            }
        } else {
            $body = 'お知らせはありません。';
        }
        echo '<p>' . $body . '</p>';
        ?>
        <!-- 本文ここまで -->
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

p１７３　チェックテスト

Q1 ファイルポインター

Q2 (p163参照) r+

Q3 file_get_contentsは全部読み込む
fgetsは１行ずつ読み込む
(読み込むだけならfile_get_contentsが楽だが、
細かい処理したい場合は、fgetsとfopen/fcloseを使う)