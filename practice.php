<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/* 值的指定 */


// 1.直接指定  //
    
$price=1000;
echo $price;
echo "<br>";
$name="olivia";
echo $name;
echo "<br>";

// 2.運算後指定 //

$price=20*5;
echo $price;
echo "<br>";
$full_name="Olivia Wu";
$first_name="Olivia";
$last_name="Wu";
$full_name=$first_name . $last_name;
echo $name;
echo "<br>";

// 3.函式結果指定 //

$array = [1, 2, 3];
$array1 = [4, 5];
$array2 = [6, 7];
$total = count($array); // 計算 $array 的元素數量
// 使用 array_merge() 合併多個數組，這裡修正了拼寫錯誤
$merge = array_merge($array1, $array2);
echo $total;
echo "<br>";
// 使用 print_r()  來輸出合併後的數組
print_r($merge);
echo "<br>";

?>

</body>
</html>