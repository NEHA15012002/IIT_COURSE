<!DOCTYPE html>
<?php
$age=21;
$name="Neha"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align='center'> Welcome <?php echo $name ?> </h1>
    <hr color= "red" size=10>
<ul>
<?php

//  $num=15;
//  while($i<=10)
//  {
//     $list_item ="<li>" .$num * $i. "</li>";
//     $i++;
//     echo $list_item;
//  }

 $num=15;
 $i=1;

//  do
//  {
//     $list_item ="<li>" .$num * $i. "</li>";
//     $i++;
//     echo $list_item;
//  }while($i<=10);

// for($i=1;$i<=10;$i++)

// {
//     echo "<li>" .$num * $i. "</li>";
// }

// for($i=1;$i<=10;$i++);

// {
//     echo "<li>" .$num * $i. "</li>";
// }

// $arr=array(1,2,3,4,5);
// for($i=1; $i<=10;$i++)

// {
//     echo $arr[$i];
// }

$arr=array(1,2);
foreach($arr as $ele)

{
    echo $ele," ","<br>";
}

//structured info using var_dump
// we can use diffrent type of values using array

$arr2=[1,2,"Amit","Sachin","Neha"];
$arr=array(1,2,"Amit",45.555);
echo gettype($arr),$arr[2];
var_dump($arr);
var_dump($arr2);
//array of array ---- Multi dimentional array

$arr=[[1,2,3],[4,5,6]];
echo $arr[0][1];

//values assocaited with meaningful names
// just like dictionaries and maps 
 

echo "<br>";
$rate=["SBI" => 5.5,
        "PNB" => 5.8,
        "ALD" => 6.0,
        "HDFC" =>5.2,
        10, "Sachin",
        125," Neha"];

  echo "SBI:", $rate["SBI"];      

  $rate=array("SBI" => 5.5,
  "PNB" => 5.8,
  "ALD" => 6.0,
  "HDFC" =>5.2);


  //add new pair
  echo "<br>";
  echo "<br>";
  $rate['ICICI']=100; // $array_Name[key]=value

  print $rate[4];
  echo "<br>";
  var_dump($rate);
 
  //method to assign directly 
  // Note by this method auto. key will be assigned starting from 0 if no 
  //int value present then last int value ke according
  $rate[]=9;
 //unset function is used to delete
 //unset($rate);
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 $a=[1,2];
 echo count($a);
 echo "<br>";
 $p=array(array(1,2,3),array(4,5));
 echo count($p,COUNT_RECURSIVE)-count($p);
 echo "<br>";
//sorting

//without mentioning key value relationship like it will sort only on the basis of value
echo sort($p);
var_dump($p);
echo "<br>";
echo rsort($p);
var_dump($p);
echo "<br>";
echo asort($p);
var_dump($p);
echo "<br>";
echo dsort($p);
var_dump($p);


$arr=array(104=>"Sachin",
102, "Neha",
103, "Rahul",
);

//ksort -> sorting on the basis of keys and the key value relationship is maintaioned


$k=array(1001,1002,1003);
$v=array("Neha","Chirag","Kirti");

$arr =array_combine($k,$v);


 ?>
 </ul>
</body>
</html>



