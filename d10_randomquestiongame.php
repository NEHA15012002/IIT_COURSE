<?php

$ques= array("UP","HP","MP");
$ans= array("Lucknow","Shimla","Bhopal");
$index=array_rand($ques);
$q=$ques[$index];
$c_ans = $ans[$index];
$res=null;
if(isset($_POST['ansBtn']))
{
    if($_POST['c_ans'] == $_POST['ans'])
     {
        $res="Correct Answer";
    }
     else
     {
        $res="Wrong Answer ";
     }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table bgcolor="grey" align = "center">
        
        <tr><td>Question </td>
        <td>What is the Capital of <?php  
         echo $q;
         ?>
         </td></tr>
        <tr><td>Answer </td>
        <td><input type="text" name ='ans'></td>
        <td><input type="hidden" name ='c_ans' value= <?php
         echo $c_ans; ?>></td>
    </tr>

        <tr>
       <td colspan="2" align="center">
      <input type="submit" name="ansBtn" value="Submit">
</td>
</tr>
<tr><td><?php echo $res; ?> </td></tr>




</table>
</form>



</body>
</html>
