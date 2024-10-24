<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
<?php
//更改時區//
date_default_timezone_set("Asia/Taipei");

//現在時間//
echo date("Y/m/d H:i:s");
echo "<br>";

// 定義兩個日期
//從9/30的23:59算到10/30號的0:00//

$start ="2024-10-01";
$end="2024-10-30";
$starTime=strtotime($start);
echo'開始時間:'.$starTime;
echo"<br>";
$endTime=strtotime($end);
echo'結束時間:'.$endTime;
echo"<br>";
$gap=$endTime-$starTime;
echo'差距秒:'.$gap;
echo"<br>";
$days=$gap/(60*60*24);
echo "間隔:".$days;
echo"<br>";
//一天的秒數//
//因為夏日時間
$s=86400;
echo $s*29;


?>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php

$start=date("Y-m-d");
$end="2025-03-01";
$starTime=strtotime($start);
echo'今天日期:'.$starTime;
echo"<br>";
$endTime=strtotime($end);
echo'下一次生日:'.$endTime;
echo"<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "距下次生日還有:".$days ."天";
echo "<br>";
?>

</body>
</html>