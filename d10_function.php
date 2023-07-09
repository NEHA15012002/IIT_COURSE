<?php
    var_dump($_POST);
    $result = NULL;
    if(isset($_POST["addBtn"]))
    {
        $result = "Sum=".($_POST["num1"] + $_POST["num2"] );
    }
    else if(isset($_POST["subBtn"]))
    {
        $result = "Difference=".($_POST["num1"] - $_POST["num2"] );
    }
    else if(isset($_POST["mulBtn"]))
    {
        $result =  "Multiplication=".($_POST["num1"] * $_POST["num2"] );
    }
    else if(isset($_POST["divBtn"]))
    {
        $result =  "Divison=" .($_POST["num1"] / $_POST["num2"] );
    }
   
    
    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>

  <body>
    
   <!--query string url note kro 
   initial usl?valname=val1&valname=val2-->
  <table  border="2px"  align="center" bgcolor ="grey" >
   <!-- method = get is by default-->
    <form method="post"  novalidate autocomplete="off">
    <tr>
      <th colspan="2">CALCULATOR</th>
   </tr>
  <tr>
      <td>Number 1</td>
      <td><input type="text" placeholder="Enter Number"  name="num1" required></td>
   </tr>
   <tr>
      <td>Number 2</td>
      <td><input type="text" placeholder="Enter Number"  name="num2" required></td>
   </tr>
   <tr> <td>
    Result:
</td>
<td>
    <input type ="text" disabled value = <?php
    echo $result; 
?>>
    

</td>
</tr>
    <tr>
    <td colspan="2" align="center">
      <input type="submit" name="addBtn" value="+">
      <input type="submit" name="subBtn" value="-">
      <input type="submit" name="mulBtn" value="*">
      <input type="submit" name="divBtn" value="/">
      <input type="reset" name="reset">
    </td>
  </tr>
  <!--Only Hidden data it is not available for user-->
   </form>
</table>
   
    </html>

   