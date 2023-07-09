<?php
$str="A quick fox brown fox" ;
$x=1;
$a = str_replace("fox","dog",$str,$x);
echo $a;

$glue="Hello";
$arr=array(1,2);
$x = implode("$", $arr[1]);
echo $x;
?>
