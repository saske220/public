<?php
  include 'includes/login.php';
  // データの受け取り
  $name = $_POST['name'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $pass = $_POST['pass'];
  $token = $_POST['token']; // CSRF対策

  // CSRF対策：トークンが正しいか？
  if ($token != hash("sha256", session_id())){
    header('Location: bbs.php');
    exit();
  }

  // 必須項目チェック（名前可本文が空ではないか？）
  if ($name == '' || $body == ''){
    header("Location: bbs.php");  // 空のときbbs.phpへ移動
    exit();
  }

  // 必須項目チェック（パスワードは４桁の数字か？
  if (!preg_match("/^[0-9]{4}$/", $pass)){
    header("Location: bbs.php");  // 書式が違うときbbs.phpへ移動
    exit();
  }
  // 名前をクッキーにセット
  setcookie('name', $name, time() + 60*60*24*30);

  // DBに接続
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password'; // tennisuserに設定したパスワード

  try {
    // PDOインスタンスの作成
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // プリペアドステートメントを作成
    $stmt = $db->prepare("
      INSERT INTO bbs (name, title, body, date, pass)
      VALUES (:name, :title, :body, now(), :pass)"
    );
    // プリペアドステートメントにパラメータを割り当てる
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    // クエリの実行
    $stmt->execute();

    // bbs.phpに戻る
    header('Location: bbs.php');
    exit();
  } catch (PDOException $e){
    exit('エラー：' . $e->getMessage());
  }
?>
