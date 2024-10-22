<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array2</title>
</head>
<body>
    <h2>威力採電腦選號沒有重複號碼(裡用while迴圈)</h2>
    <!--如果用for迴圈不知道何時會重複  -->
    <!-- while用於不確定結束時間 -->

    <!-- ul>ui* -->
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php
/*rand(int $min , int $max): int => 產生一個隨機整數，設定範圍要(最小值,最大值) */
/*獨立事件:每一次的事件機率都相同*/

/*第一次的算式，六個數字會重複*/
echo rand(1,38);
echo"，";
echo rand(1,38);
echo"，";
echo rand(1,38);
echo"，";
echo rand(1,38);
echo"，";
echo rand(1,38);
echo"，";
echo rand(1,38);

/*第二次*/
$nums=[];// 初始化一個空陣列

// 使用 while 迴圈產生隨機號碼
while(count($nums)<6){
$n=rand(1,38);// 產生隨機號碼
/* !反向運算元*/
// 檢查號碼是否已存在於陣列中
if( !in_array($n, $nums)) {
    $nums[]=$n;// 如果不存在，將號碼加入陣列

}
}
   

echo "<br>";
sort($nums);// 將號碼排序
foreach($nums as $num){
    echo "$num, ";
}

echo "<hr>";
echo join(", ",$nums) ;

?>


<h2>找出五百年內的閏年</h2>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php

$leap=[];

for($i=2024;$i<=2524;$i++){
    if($i % 4==0 && ($i % 100 != 0 || $i % 400 == 0)){
        $leap[]=$i;

    }
}

 echo "<pre>";
print_r($leap);
echo "</pre>"; 


        ?>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>

<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<?php
/*CHATGPT提供的*/
// // 定義天干和地支
// $tiangan = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
// $zhidi = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

// // 基準年份
// $baseYear = 1024;
// $baseTiangan = 0; // 甲子年對應的天干索引
// $baseDizhi= 0;   // 甲子年對應的地支索引

// // 輸入年份
// $inputYear = 2023; // 假設這是用戶輸入的年份

// //計算與基準年份的差距
// $yearDiff = $inputYear - $baseYear;

// // 計算天干和地支的索引
// $tianganIndex = ($baseTiangan + $yearDiff) % 10; //天干總共10個
// $dizhiIndex = ($baseZhidi + $yearDiff) % 12; //地支總共12個

// // 輸出結果
// echo "西元 {$inputYear} 年是 " . $tiangan[$tianganIndex] . $dizhi[$dizhiIndex] . " 年。";

/*1.做成wiki天干地支圖示*/

// $sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
// $land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

// $s1=[];
// echo"<table>";
// for($i=0;$i<6;$i++){
//     echo"<tr>";
//     for($j=0;$j<10;$j++){
//         $cellnum=10*$i+$j;
//         $landIndex=$cellnum%12;
//         echo"<td>";
//         echo $sky[$j];
//         echo $land[$landIndex];
//         echo"<td>";

//     }
//     echo "</tr>";
// }
// echo"</table>";

/*2.已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。*/

$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

$s1 = []; // 儲存天干地支的配對
$sl = []; // 儲存最終的配對

// 生成天干地支配對
for($i=0;$i<6;$i++){
for($j=0;$j<10;$j++){
    $cellnum=10*$i+$j;
    $landIndex=$cellnum%12;
    $sl[]=$sky[$j].$land[$landIndex];
}
}
$year=2034;

// 計算對應的天干地支年別
$index = ($year - 4) % 60; // 2034 年對應的索引
echo "西元 $year 年是 " . $sl[$index] . " 年。"; // 輸出結果

//echo "<pre>";
//print_r($sl);
//echo "</pre>";


?>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<ul>
    <li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
</ul>
<?php

$a=[2,4,6,1,8];

for($i=0;$i<floor(count($a)/2);$i++){
    $temp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$temp;
}
echo"<br>";
echo"<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";


?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


</body>
</html>