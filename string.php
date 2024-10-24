<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <h2>字串取代</h2>
   <ul>
<li>將”aaddw1123”改成”*********”</li>
</ul>
<?php
//只取其中2個字//
$str = "aaddw1123";
echo $str . "<br>";
$str=str_replace('aa',"**",$str);
echo $str . "<br>";
echo "<br>";

// str_replace => 也可以用陣列//
$str=str_replace(['a','a','d','d','w','1','1','2','3'],"*",$str);
echo $str . "<br>";
echo "<br>";

// 和mb_strlen一起運用 =>用字串長度取代原來的字//
$str=str_replace(['a','a','d','d','w','1','1','2','3'],"*",$str);
echo $str . "<br>";
$str=str_repeat("*",mb_strlen($str));
echo $str . "<br>";


?>

<h2>字串取代</h2>
   <ul>
    <li>將”this,is,a,book”依”,”切割後成為陣列</li>
    </ul>

<?php

$str="this,is,a,book";
$str=explode(",",$str);
//陣列要用<pre> & print_r //
echo"<pre>";
print_r($str);
echo"</pre>";

?>

<h2>字串組合</h2>
   <ul>
    <li>將上例陣列重新組合成“this is a book”</li>
    </ul>
    <?php
    //用空格連接//
    $str=join(" ",$str);
    echo $str . "<br>";


    ?>
    
    <h2>子字串取用</h2>
   <ul>
    <li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
    </ul>
    <?php
    //php陣列是以字串儲存的//
    //substr//
    $str = "The reason why a great man is great is that he resolves to be a great man";
    //php字串是"0"開始計算//
    $str=substr($str,0,10)."...";
    echo $str . "<br>";
    //mb_substr//
    $str = "The reason why a great man is great is that he resolves to be a great man";
    $str=mb_substr($str,0,10)."...";
    echo $str . "<br>";
    //中文//
    //substr =>中文若使用substr容易出問題，且一個中文字是3bite
    // $str="一個偉人的偉大之所以存在，是因為他下定決心要成為一個偉人";
    // $str=substr($str,0,10)."...";
    // echo $str . "<br>";

    //mb_substr =>適合用於多語系(一個中文字1個bite)
    $str="一個偉人的偉大之所以存在，是因為他下定決心要成為一個偉人";
    $str=mb_substr($str,0,10)."...";
    echo $str . "<br>";
?>


    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
     <li>給定一個句子，將指定的關鍵字放大</li>
     <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
     <li>請將上句中的 “程式設計” 放大字型或變色.</li>
     </ul>

<?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $key="程式設計";
    $large="<span style='font-size:28px;color:blue'>".$key."</span>";

    //改成變數的運用,未來只需修改$key
    $str=str_replace($key,$large,$str);
    echo $str . "<br>";


    ?>





</body>
</html>