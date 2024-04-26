<?php
$friends[5] = "まさとし";
$friends[2] = "よしき";
var_dump($friends);

echo "5番目: " . $friends[5] . "<br>";

?>

<pre>
<?php
$result1 = array(
    "japanese" => 80,
    "math" => 75,
    "science" => 90
);
var_dump($result1);
echo "math: " . $result1['math'] . "<br>";
echo "japanese: " . $result1['japanese'] . "<br>";

$result2 = [
    "history" => 85,
    "English" => 80
];
var_dump($result2);
echo "history: " . $result2['history'] . "<br>";
?>
</pre>
<pre>


<?php
$result = array(
    "japanese" => 80,
    "math" => 75,
    "science" => 90
);

var_dump($result);

$result["math"] = 85;
var_dump($result);

$result["music"] = 90;
var_dump($result);


?>
</pre>