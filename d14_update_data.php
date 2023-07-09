<?php
include_once('./Header.php');
include_once('./nav.php');
?>
<?php
include_once("./d13_db_con.php");
$link = mysqli_connect($hostname,$username,$password,$databaseName);
if(isset($_GET['did'])){
    $qry="delete from emp_master where emp_id=$_GET[did]";
    //echo $qry;
    mysqli_query($link,$qry);
    header("location:d14_page.php?d=1");

}
extract($_POST);


if(isset($updateBtn))
{
    $qry="update emp_master set emp_email ='$mail_id', emp_password='$pwd' where emp_id='$uid'";
    mysqli_query($link,$qry);

    $qry="select * from emp_master where emp_id=$uid";
    $resultSet=mysqli_query($link,$qry);
    $row=mysqli_fetch_assoc($resultSet);
    extract($row);
    header("location:d14_page.php");
}
if(isset($_GET['id']))
{
    $qry= "select * from emp_master where emp_id=$_GET[id]";
    $resultSet=mysqli_query($link,$qry);
    $row=mysqli_fetch_assoc($resultSet);
    extract($row);
}







?>




<section class='mt-3'>
    <div class ="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <table class="table table-bordered table-striped table-hover" border='3px' style= "width:30%;" align='center'>
        <thead class ="table-dark" style="text-align:center;">
        <tr>
           <th colspan =2 > Edit Record </th>
           
           </tr>
           </thead>
           <tbody>
            <tr><td>User ID</td><td><input type="text" name="uid" readonly value="<?php echo $emp_id;?>"></td><tr>
            <tr><td>User Name</td><td><input type="text" name="unm" readonly value="<?php echo $emp_name;?>"></td><tr>
            <tr><td>User Email</td><td><input type="email" name="mail_id" value="<?php echo $emp_email;?>"></td><tr>
            <tr><td>Password</td><td><input type="text" name="pwd" value="<?php echo $emp_password;?>"></td><tr>
            <tr><td>Dob</td><td><input type="text" name="dob" readonly value="<?php echo $emp_dob;?>"></td><tr>
            <tr><td>Department</td><td><input type="text" readonly name="dept" value="<?php echo $emp_dept;?>"></td><tr>
            <tr><td>Salary</td><td><input type="number" readonly name="sal" value="<?php echo $emp_salary;?>"></td><tr>
            <tr><td colspan=2><input type="submit" name="updateBtn" value="Update Record"></td><tr>
</tbody>


</table>
</form>
</div>



</section>


<?php
include_once('./Footer.php');
?>