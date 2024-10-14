<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
 <?php
 echo "*";
 echo "<br>";
 echo "**";
 echo "<br>";
 echo "***";
 echo "<br>";
 echo "****";
 echo "<br>";
 echo "*****";
 echo "<br>";
 ?>
<hr>
<h2>直角三角形</h2>
 <?php 

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒直角三角形</h2>
 <?php 

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>正三角形</h2>
 <?php 

for($i=0;$i<5;$i++){

    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<hr>
<h2>倒正三角形</h2>
 <?php 

for($i=0;$i<5;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*(4-$i)+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒正三角形2</h2>
 <?php 

for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2></h2>
 <?php 

for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>菱形</h2>
 <?php 

for($i=0;$i<21;$i++){
    if($i>10){
        /* $t=$i-4;
        $i-4    =>1,2,3,4
        2*($i-4)=>2,4,6,8
        $i      =>5,6,7,8
        2*($i-(2*($i-4)))+1=>7,5,3,1
        2*($i-(2$i-8))+1
        2*(8-$i)+1
        17-2$i */


        for($k=0;$k<$i-10;$k++){
            echo "&nbsp;";
        }

        for($j=0;$j<2*($i-(2*($i-10)));$j++){
            echo "*";

    }
        echo"<br>";
}else{

    for($k=0;$k<10-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
        echo"<br>";


}
    
}

?>

<h2>菱形2</h2>
 <?php 

for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;

    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

        for($k=0;$k<$k1;$k++){
            echo "&nbsp;";
        }

        for($j=0;$j<$j1;$j++){
            echo "*";

    }
        echo"<br>";
}

?>


<h2>菱形對角線</h2>
 <?php 
 /*控制大小和增加對角線*/
$size=11;
if($siz >=3){
    if($size%2==0){
    $size++;
    }
}else{
    echo "數字太小,無法畫出菱形";

}

for($i=0;$i<$size;$i++){
    if($i>floor($size/2)){
    for($k=0=$k<$i-floor($size/2);k++){
        echo "&nbsp;";
    }
    for(j=0;$j<2*($i-(2*($i-floor($size/2)))))+1;$j++)

        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$i-floor($size/2);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}
?>


<h2>矩形</h2>
 <?php 

  for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($i==1 || $i==5){
            echo "*";
        }else if($j==1 ||$j==5){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";    
    



  }
?>

</body>
</html>