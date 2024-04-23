<?php

$results = array(
	"Japanese" => 60,
	"English" => 70,
	"Mathematics" => 50,
	"History" => 60,
	"Biology" => 45
);

?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-bordered">
    <?php
    // 配列の要素を出力する
    foreach ($results as $key => $val) {
        echo '<tr>' . PHP_EOL;
        echo '<td>' . PHP_EOL;
        echo $key;
        echo '</td>' . PHP_EOL;
        echo '<td>' . PHP_EOL;
        echo $val;
        echo '</td>' . PHP_EOL;
        echo '</tr>' . PHP_EOL;
    }
    ?>
    <tr>
        <th>Total</th>
        <th></th>
    </tr>
</table>
</body>
</html>
