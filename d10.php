<?php


$arr=array(1001=>"Amit",
1002=>"Neha",
1003=>"Hello",
1004=>"Hi",
1005=>"Bye");

var_dump($arr);
$keys=array_keys($arr);
var_dump($keys);

var_dump($arr);
$search=array_search($arr);

echo $array_shift($arr);
var_dump($arr);

echo $array_unshift($arr,"Rahul");

$arr1=array(1,2,3,4);
$arr2=array(5,6,7,8);

echo "<br>";

$merge = array_merge($arr1,$arr2);

var_dump($merge);




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$arrw = array(1,2,3,4,5,6,7,8);
function myfun($v)
{
    if($v %2==0)
     return true;
     else
      return false;
    
}

$resArr=array_filter($arrw,"myfun");
var_dump($resArr);


$resArr1=array_filter("myfun",$arrrw);
var_dump($resArr1);



?>