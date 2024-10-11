<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎</title>
</head>
<body style='text-align:center'>
   <?php

   define('PI','3.1415');


   $price=100;
   echo $price;

   echo "<br>";
   $name="olivia";
   echo $name;

   echo "<br>";
   if($name ="Olivia") {
    echo "Hello, Olivia!";
  
  }

   $email = "jollen@jollen.org";
   echo $email;


   echo "<br>";
   $total=(100*5)+(32/10*3);
   echo $total;

   echo "<br>";
   $num=rand(1,49);

   echo "<br>";
   echo "圓周率是".PI;

   /* define("PI",0.6128);
   |* echo "<br>";
   |* echo "圓周率是".PI; */

 


  ?> 
  <h1>練習</h1>
  <pre>
  例:
  $a = 10; $b = 50;
  交換後
  $a = 50; $b = 10;
</pre>


<?php

$a=10;
$b=50;

$temp = $a;
$a = $b ;
$b = $temp;

echo $a;
echo $b;



?>

</body>
</html>