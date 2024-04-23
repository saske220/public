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

        <h1>掲示板</h1>
        <form action="write.php" method="post">
          <div class="form-group">
            <label>タイトル</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <textarea name="body" class="form-control" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label>削除パスワード（数字４桁）</label>
            <input type="text" name="pass" class="form-control">
          </div>
          <input type="submit" class="btn btn-primary" value="書き込む">
        </form>

        <!-- 本文ここまで -->
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
