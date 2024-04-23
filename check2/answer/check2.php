<?php
include ('check2_data.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<form action="check2form.php" method="post">
    <!-- ここにフォームを書いていく -->
    <p>すきな果物を選んでください。:
    <?php
    foreach ($fruits as $key => $val) {
        echo '<input type="radio" name="fruit" value="' . $key . '">';
        echo $val;
    }
    ?>
    </p>
    <input type="submit" value="送信">
</form>
</body>
</html>
