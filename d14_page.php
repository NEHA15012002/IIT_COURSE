<?php
include_once('./Header.php');
include_once('./nav.php');
?>
<section class='mt-3'>
    <div class ="container" align='center'>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type ='submit' class='btn-btn-primary' name='showBtn' value='Display Data'/>

    <?php
    

    extract($_POST);
    if(isset($showBtn)or isset($_GET['d']))
    {   
        include_once("./d13_db_con.php");
        $link = mysqli_connect($hostname,$username,$password,$databaseName);
        $qry="select * from emp_master";
        $resultSet=mysqli_query($link,$qry);
        //indexed single
        // while($row=mysqli_fetch_row($resultSet))
        // {
        //     var_dump($row);
        //     echo"<$row[0]br>";
        // }
        //associative
       // while($row=mysqli_fetch_assoc($resultSet))
        // {
        //     var_dump($row);
        //     //echo"<br>";
        // }
        //associative and indexed single
        $table=<<<Tab
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" border='3px' width='700px' align='center'>
        <thead class ="table-dark">
        <tr>
           <th>User Id </th>
           <th>User Name </th>
           <th>User Email </th>
           <th>Password </th>
           <th>dob </th>
           <th>Department </th>
           <th>Salary </th>
           <th>Edit </th>
           <th>Delete </th>
           </tr>
           </thead>
           <tbody>
Tab;           
    //     while($row=mysqli_fetch_array($resultSet))
    //     {
    //         var_dump($row);
    //         echo"$row[emp_name],$row[0]<br>";
    //     }
        

    //     mysqli_close($link);

    // }
    while($row=mysqli_fetch_assoc($resultSet))
    {
      $r="<tr><td> $row[emp_id]</td>
      <td> $row[emp_name]</td>
      <td> $row[emp_email]</td>
      <td> $row[emp_password]</td>
      <td> $row[emp_dob]</td>
      <td> $row[emp_dept]</td>
      <td> $row[emp_salary]</td>
      <td> <a href='d14_update_data.php?id=$row[emp_id]' class ='btn btn-info'>Edit</a></td>
      <td> <a href='d14_update_data.php?did=$row[emp_id]' class ='btn btn-danger'>Delete</a></td>
      </tr>";
      
      $table .=$r;

    }
     $table.="</tbody></table></div>";
     echo $table;

    

    }




     ?>

</form>
</div>
</section>


<?php
include_once('./Footer.php');
?>