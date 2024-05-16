
<style>
.red {
    color: red;
    font-weight: bold;
}
</style>

<?php

$results = array(
	"Japanese" => 60,
	"English" => 70,
	"Mathematics" => 50,
	"History" => 60,
    "Chemistry" => 65,
	"Biology" => 45
);

$total = 0;
echo "<table class='table table-bordered'>";
foreach($results as $title => $score){
    echo "<tr>";
    echo "<td>" . $title . "</td>";
    if($score < 60){
    echo "<td><span class='red text-danger fw-bold'>" . $score . "</span></td>";
}else{
    echo "<td>" . $score . "</td>";
}
    echo "</tr>";
    $total += $score;
}
echo "<tr>";
echo "<td>Total</td>";
echo "<td>" . $total . "</td>";
echo "</tr>";
echo "</table>";
echo
"<!-- bootstrap をつかいたい人は↓";




/*  出力するHTMLのサンプル
    <table class="table table-bordered">
        <tr>
            <td>Japanese</td>
            <td>60</td>
        </tr>
        <tr>
            <td>English</td>
            <td>70</td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td><span class="text-danger fw-bold">50</span></td>
        </tr>
        <tr>
            <td>History</td>
            <td>60</td>
        </tr>
        <tr>
            <td>Biology</td>
            <td><span class="text-danger fw-bold">45</span></td>
        </tr>
        <tr>
            <th>Total</th>
            <th>285</th>
        </tr>
    </table>
 */

?>
<html>
<head>
    <!-- bootstrap をつかいたい人は↓
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    -->
</head>
<body>

</body>
</html>
