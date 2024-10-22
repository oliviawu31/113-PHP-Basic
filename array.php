<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>陣列宣告</h2>
<?php

    $header=['', '國文', '英文', '數學', '地理', '歷史'];
    $judy=['judy',95,64,70,90,84];
    $amo=['amo',88,78,54,81,71];
    $john=['john',45,60,68,70,62];
    $students=[['judy',95,64,70,90,84],
    ['amo',88,78,54,81,71],
    ['john',45,60,68,70,62]];
$stus=['judy'=>[95,64,70,90,84],
    'amo'=>[88,78,54,81,71],
    'john'=>[45,60,68,70,62]];

$stus2=['judy'=>[
     '國文'=>95,
     '英文'=>64,
     '數學'=>70,
     '地理'=>90,
     '歷史'=>84],
 'amo'=>[
     '國文'=>88,
     '英文'=>78,
     '數學'=>54,
     '地理'=>81,
     '歷史'=>71],
 'john'=>[
     '國文'=>45,
     '英文'=>60,
     '數學'=>68,
     '地理'=>70,
     '歷史'=>62]];
     /* foreach($array as $idx => $value){
    echo "index => ". $idx .": value =>".$value;
    echo "<br>";
}
foreach($array2 as $key => $value){
    echo "index => ". $key .": value =>".$value;
    echo "<br>";
}
 */
?>
<style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
<table>
    <tr>
        <?php
    foreach($header as $value){
        
        echo "<td>{$value}</td>";
    }

?>  
    </tr>
    <tr>
        <?php
    foreach($judy as $value){
 
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
    <tr>
        <?php
    foreach($amo as $value){        
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
    <tr>
        <?php
    foreach($john as $value){
        echo "<td>{$value}</td>";
    }   
    ?>
    </tr>
</table>
<hr>
<table>
    <tr>
        <?php
    foreach($header as $value){
        
        echo "<td>{$value}</td>";
    }

?>  
    </tr>
    <?php
    foreach($students as $student){
        echo "<tr>";
        foreach($student as $value){
            echo "<td>{$value}</td>";
        }   
        echo "</tr>";
    }
    ?>

</table>
<hr>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($stus as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
</table>
<hr>
<?php 
$tmp=$stus2;
echo "<pre>";
print_r($stus2);
echo "</pre>";
$keys=array_keys($stus2);
$first=array_shift($stus2);
$header=array_keys($first);
array_unshift($header,'學生');

$nstu=array_merge([$first],array_values($stus2));

echo "<pre>";
echo "nstu<br>";
print_r($nstu);
echo "</pre>";
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<pre>";
print_r($header);
echo "</pre>";
//echo $key;
//$stus2[$key]=$first;
$tt=[];
foreach($keys as $idx => $name){
    $tt[$name]=$nstu[$idx];
}

echo "<pre>";
echo "tt<br>";
print_r($tt);
echo "</pre>";
?>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($tt as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
    </table>
<h2>利用程式來產生陣列</h2>
<!-- ul>li* -->
    <ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<?php
// 宣告空陣列
$nine=[];
// 生成九九乘法表並存入陣列
for($i = 1;$i <= 9; $i++){
    for($j =1; $j <=9; $j++){
        //將每個乘法項目以字串形式存入陣列
        $nine[]="$i x $j = ". ($i * $j);
       
       
        //原來的九九乘法表

        // echo "$i x $j = ";
        // echo $i*$j;
        // echo ",";
    }
    // echo "<br>";
}
// <pre></pre> =>根據原始的資料呈現
// echo"<pre>";
// print_r($nine);
// echo "</pre>";

// 使用計數器來控制每行顯示的項目數量
// 每輸出一個項目後，增加計數器。
// 當計數器的值能被 9 整除時，換行；否則使用逗號分隔。
$counter=0;
foreach($nine as $idx => $n){
    $counter++;
    // 每行顯示 9 個項目
    if($counter==9){
        echo $n . "<br>";// 輸出乘法表項目
        $counter=0;
    }else{
        echo $n . ","; // 逗號分隔
    }
}
echo"<hr>";
foreach($nine as $idx => $n){
    if($idx%9==8){
        echo $n . "<br>";
    }else{
        echo $n . ", ";
    }
}
 //用表格的方式呈現九九乘法表
 echo "<table>";
foreach($nine as $idx => $n){
    if($idx%9==8){
        //如果餘數是8(每行的最後一個項目)結束該行，會加</tr>
        echo "<td>$n</td></tr>";
        //如果餘數是0會加<tr><td></td>
    }else if($idx%9==0){
        echo "<tr><td>$n</td>";       
    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";

echo "<hr>";

echo "<table >";// 開始表格，
foreach($nine as $idx => $n){
    $v=explode("=",$n)[1]; //explose為拆開，用 "=" 拆出兩個字串，第一個為零，第二個為一
    if($idx%9==8){
        echo "<td>$v</td></tr>";

    }else if($idx%9==0){
        echo "<tr><td>$v</td>";

    }else{
        echo "<td>$v</td>";
    }
}
echo "</table>";
echo"<hr>";
//運用陣列的key值
$nine2=[];

for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        $nine2["$i x $j"]=$i*$j;

    }
}
    echo "<pre>";
    print_r($nine2);
    echo "</pre>";

    echo "<hr>";

    $counter=0;
foreach($nine2 as $key => $n){
    $counter++;
    if($counter==9){
        echo $key  . " = ".$n ."<br>";
        $counter=0;
    }else{
        echo $key  . " = ".$n .", ";

    }
}
echo "<hr>";

echo "<table>";
$counter=0;
foreach($nine2 as $n){
    $counter++;
    if($counter==9){
        echo "<td>$n</td></tr>";
        $counter=0;
    }else if($counter==1){
        echo "<tr><td>$n</td>";

    }else{
        echo "<td>$n</td>";
    }
}
echo "</table>";
echo "<hr>";
echo "<hr>";
$nine3=[];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine3[]=['formula' => "$i x $j",'value'=>$i*$j];
    }    
}

echo "<pre>";
print_r($nine3);
echo "</pre>";

echo "<hr>";

foreach($nine3 as $idx =>$item){
    if($idx%9==8){
        echo $item['formula'] . " = ".$item['value']. "<br>";
    }else{
        echo $item['formula'] . " = ".$item['value'];

    }
}





/* echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "$i x $j = ";
        echo $i*$j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>"; */

?>

<?php
$nine = []; // 初始化陣列

// 生成九九乘法表並以關聯陣列存入陣列
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $nine[] = ["formula" => "$i x $j", "value" => $i * $j];
    }
}

// 輸出九九乘法表
echo "<table border='1'>"; // 開始表格
foreach ($nine as $idx => $entry) {
    if ($idx % 9 == 0) {
        echo "<tr><td>{$entry['formula']} = {$entry['value']}</td>";
    } elseif ($idx % 9 == 8) {
        echo "<td>{$entry['formula']} = {$entry['value']}</td></tr>";
    } else {
        echo "<td>{$entry['formula']} = {$entry['value']}</td>";
    }
}
echo "</table>"; // 關閉表格
?>


 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>

</html>