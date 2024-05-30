<?php
$name = $_POST['name'];

$gender_raw = $_POST['gender'];
if($gender_raw == "man"){
    $gender = "男性";
}

else if($gender_raw == "woman"){
    $gender = "女性";
}

else{
    $gender = "不正な値";
}

$age = $_POST['atar'];

$other = $_POST['other'];
$tmp_star = intcal($_POST['star']);
$star = "";
if($tmp_star < 1 || $tmp_star > 5){
    $star = "不正な値";
}else{
    for($i = 0; $i < $tmp_star; $i++){
        $star .= "★";
    }
}
