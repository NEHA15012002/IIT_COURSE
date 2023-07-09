<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arr =array(1,2,3,4,3,2,3,4,2,1);
echo "Total Elements: ",count($arr),"<br>";
$newArr = array_chunk($arr,3,true);
// to divide the array into chunks 
var_dump($newArr); 
var_dump(in_array(1,$arr));

array_push($arr,10);
var_dump($arr);

array_pop($arr);
var_dump($arr);

$Name = "Neha";
$p=array("Name"=>"Sachin","Age" =>45);
echo $Name;
extract($p,EXTR_PREFIX_SAME,"dup");
echo $dup_Name;
echo $p["Name"];
//clearly states the use of extract

//coming to rules
//we can see the value is overwitten
//extract($p);
//


    ?>
</body>
</html>