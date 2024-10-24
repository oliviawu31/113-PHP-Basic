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

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>

<ul>
    <li>2021/10/05</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
$weekString=[
    'Monday'=>['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
    'Tuesday'=>['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
    'Wednesday'=>['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
    'Thursday'=>['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
    'Friday'=>['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
    'Saturday'=>['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
    'Sunday'=>['min'=>'七','short'=>'周日','fulltext'=>'星期日']
    ];
echo date("Y年m月d日");
echo"<br>";
echo date("m月d日l");
echo"<br>";
echo "今天是西元".date("Y年m月d日l");
if(date("N")>5){
    echo "假日";
}else{
    echo "上班日";
}
?>

<h2>利用迴圈來計算連續五個周一的日期
    <br>例:</h2>
    <ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>


<?php 
for($i=0;$i<5;$i++){
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $weekString[date("l")]['fulltext'];
    echo "<br>";
}

?>



<h1>線上月曆製作</h1>

<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
    table{
        border-collapse:collapse;/* 合併邊框 */

    }
    td{
        padding:5px 10px; /* 單元格內部填充 */
        text-align: center; /* 文字置中 */
        border:1px solid #999; /* 單元格邊框 */
    }
</style>
<h3><?php echo date("m月");?></h3> <!-- 顯示當前月份 -->
<table>
<tr>
    <td></td><!-- 空白單元格，用於對齊 -->
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
$d=strtotime("2024-6");// 將特定日期轉換為時間戳，這裡是 2024 年 6 月
$firstDayWeek=date("w",strtotime(date("Y-m-1")));
// echo $firstDayWeek;
for($i=0;$i<6;$i++){// 生成六行
    echo "<tr>"; // 開始一行
    echo "<td>";// 開始一個單元格
    echo $i+1;// 顯示行數，從 1 開始
    echo "</td>";
    for($j=0;$j<7;$j++){// 生成七列，對應一週的七天
        echo "<td>";
        $dayNum=$i*7 + $j + 1 - $firstDayWeek;// 計算當前的日期數字
        if($dayNum<=date('t') && $dayNum >0){// 如果當前日期小於等於當月的總天數
            echo $dayNum;
        }
        echo "</td>";
    }

    echo "</tr>";


}

?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>