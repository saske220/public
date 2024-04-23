<?php

$results = array(
	"Japanese" => 60,
	"English" => 70,
	"Mathematics" => 50,
	"History" => 60,
	"Biology" => 45
);


// 60 点未満かどうかを判定する関数を作る
function is_failed_score( $val ) {
    if ( $val < 60 ) {
        return true;
    } else {
        return false;
    }
}

// 赤字を追加する
function score_to_html( $val ) {
    if ( is_failed_score($val) ) {
        echo '<span class="text-danger fw-bold">';
        echo $val;
        echo '</span>';
    } else {
        echo $val;
    }
}
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-bordered">
    <?php
    // 合計点を変数に格納しておく
    $total = 0;
    // 配列の要素を出力する
    foreach ($results as $key => $val) {
        echo '<tr>' . PHP_EOL;
        echo '<td>' . PHP_EOL;
        echo $key;
        echo '</td>' . PHP_EOL;
        echo '<td>' . PHP_EOL;
        score_to_html($val);
        echo '</td>' . PHP_EOL;
        echo '</tr>' . PHP_EOL;

        $total = $total + $val; // 各科目の点数を $total に足していく
    }
    ?>
    <tr>
        <th>Total</th>
        <th><?php echo $total;?></th>
    </tr>
</table>
</body>
</html>
