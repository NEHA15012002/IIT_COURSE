<?php
//Required
//positional arguments
$num =10;
function myfun($name, $age)
{   // direct global keyword
    global $num;
    $num = 20;
    echo $num, "<br>";
    echo "Name: $name", "<br>", "Age: $age";
}

myfun("neha",45);
echo "<br>", $num;


//include 
//require

include('./d12.php');
include('./d12.php');
include('./d12.php');

?>