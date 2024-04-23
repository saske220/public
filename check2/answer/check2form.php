<?php
include ('check2_data.php');

$message = '回答は、';

// データを検証する処理
if ( isset($_POST['fruit']) ) { // フォームの送信データが入っているか
    $fruit_key = $_POST['fruit'];
    if (array_key_exists($fruit_key, $fruits)) { // 送信データが想定されているものか
        $message .= $fruits[$fruit_key] . 'です';
    } else {
        $message .= '不正な選択です';
    }
} else {
    $message .= '選択されていません。';
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<?php
echo $message;
?>
</body>
</html>
