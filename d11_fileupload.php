<!DOCTYPE html>

<?php
$imgpath= NULL;
if(isset($_POST["subBtn"]))
{
    var_dump($_FILES['file_ctrl']);
    $arr=explode(".",$_FILES['file_ctrl']['name'] );
    $ext=end($arr);
    $exts=array('jpg','jpeg','png','gif');
   
      

    //var_dump($_SERVER['DOCUMENT_ROOT']);

    if($_FILES['file_ctrl']['error']==0 )
    {   

        if(in_array($ext,$exts))
        {
       $tmp_name = $_FILES['file_ctrl']['tmp_name'];
       $imgpath = "./upload/".$_FILES['file_ctrl']['name'];

       //$finalPath= $_SERVER['DOCUMENT_ROOT']."/iit_course/designpages/UploadDataFolder/".$_FILES['file_ctrl']['name'];
       $finalPath="./upload/".$_FILES['file_ctrl']['name'];
       echo $finalPath;
       //var_dump($finalPath,$tmp_name);

       move_uploaded_file($tmp_name,$finalPath);
       echo "<br>";
       echo "File Uploaded.....";
        }
        else 
        {
           echo "Please upload img formart in jpg,jpeg,png  or gif ";
        }
        
    }
   
}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .bx{
     background-color:lightgrey;
     font-size: large;
     border-radius: 100%;
     color: white;
     padding: 8px;
    }

    </style>
</head>
<body>
    <form method='post' enctype= "multipart/form-data">
    <table border = 2px align="center"  width="400px">
        <tr><td> Upload Image</td>
            <td><input type ="file" name="file_ctrl" multiple></td>
</tr>

<tr>
    <td colspan='2' align='center'><input type ="submit" name="subBtn" value='Upload'></td>
</tr>
</form>
</table>
<img src= "<?php echo $imgpath ?>" >

<i class='bx bx-user'></i>
<i class='bx bxs-user'></i>
<i class='bx bxl-facebook-square'></i>
<i class='bx bxs-coffee-bean'></i>



</body>
</html>
