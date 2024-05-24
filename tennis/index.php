<?php
$info = file_get_contents("info.txt");
?>
<!-- 読み込み専用 -->
<?php
$fp = fopen("info.txt", "r"); ?>
<!-- １行だけ読み込む -->
<?php
$title = fgets($fp); ?>

<!doctype html>
<html lang="ja" >
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <?php $info = file_get_contents('info.txt'); ?>

    <?php include('navbar.php'); ?>

  <main role="main" class="container" style="padding:60px 15px 0">

        <?php include('navbar.php'); ?>
        <h1>おしらせ</h1>

        <!-- nl2br:改行 -->
        <!-- nl2br(文字列 false)→ -->
        <!-- nl2br(文字列 true)→ -->

        <!-- p161
        fopenファイルを開く
        fgetsファイルから１行ずつ読み込む
        fcloseファイルを閉じる

         p162
        fopen(ファイル名、モード)モードの詳細はp163
        読み込み専用で開く場合
        fopen("info.txt","r")-->
<div>
        <?php
        if($fp){
            $title = fgets($fp);
            if($title){
                echo $title;
                echo '<p><a href="info.txt">info.txt</a></p>';

            }else{
                echo '<p>おしらせがありません</p>';
            }
        }else{
            echo "ファイルが開けませんでした";
        }
        ?>

        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
