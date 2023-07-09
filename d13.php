<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table  border="2px"  align="center" bgcolor ="#0390fc"  >
   <!-- method = get is by default-->
    <form method="post" >
    <tr>
      <th colspan="2">REGISTRATION FORM</th>
   </tr>
  <tr>
      <td>Name</td>
      <td><input type="text" placeholder="Enter Name" minlength="3" maxlength="7" name="username" required></td>
   </tr>
   <tr>
   <td>Email</td>
      <td><input type="email" name="email"></td>
      </tr>
   <tr>
      <td>
        Password
      </td>
      <td><input type="password" placeholder="Example: Hp@123" name="password"></td>
   </tr>
      
      
      
    
      <tr>
        <td>DoB</td>
        
    <td>
      <input type="date" min="2000-12-15" max="2022-05-10" name="date">
    </td></tr>
    
  
  <tr><td>Department</td>
  <td>
    <select name="dept">
      <option disabled selected>~~Select~~</option>
      <optgroup label="Tech">
      <option>admin</option>
      <option>sales</option>
      <option >accounts</option>
      <option>finance</option>
      </optgroup>
      <optgroup label="development">
      <option disabled>SDE</option>
      <option>SRE</option>
      </optgroup>
    </select>
  </td></tr>
  
  <tr><td>Salary</td>
   <td><input type="number" min="0" step="1" name="sal"></td>
  </tr>
  <tr>
    <td colspan='2'>
      <input type="submit" name="submit">
      <input type="reset" name="reset">
    </td>
  </tr>
  <!--Only Hidden data it is not available for user-->
   </form>

   <?php
   extract($_POST);
   if(isset($submit))
      {  var_dump($_POST);
        include_once("./d13_db_con.php");
        $link = mysqli_connect($hostname,$username,$password,$databaseName);
        // $qry="insert into emp_master(emp_name,emp_email,emp_password,emp_dob,emp_dept,emp_salary) values(
        //     'Sanjeev',
        //     's@gmail.com',
        //     '1234',
        //     '2003-03-11',
        //     'Accounts',
        //     456780);";
         $qry="insert into emp_master(emp_name,emp_email,emp_password,emp_dob,emp_dep,emp_salary) values( 
            $_POST[username] , $_POST[email],$_POST[password] , $_POST[data], $_POST[dept] ,$_POST[sal])";
            echo $qry;
        mysqli_query($link,$qry);
        mysqli_close($link);

      }
?>
</body>
</html>