<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>

  <body bgcolor="red">
    
   <!--query string url note kro 
   initial usl?valname=val1&valname=val2-->
  <table  border="2px"  align="center" bgcolor ="#0390fc"  >
   <!-- method = get is by default-->
    <form method="post"  novalidate autocomplete="off">
    <tr>
      <th colspan="2">REGISTRATION FORM</th>
   </tr>
  <tr>
      <td>Name</td>
      <td><input type="text" placeholder="Enter Name" minlength="3" maxlength="7" name="username" required></td>
   </tr>
  <tr>
    <td>
      Range
    </td>
    <td>
      <input type="range">
    </td>
  </tr>
   <tr>
      <td>
        Password
      </td>
      <td><input type="password" placeholder="Example: Hp@123" name="password"></td>
   </tr>
      <tr>
      <td>Email</td>
      <td><input type="email" name="email"></td>
      </tr>
      <tr><td>
     
      <tr>
        <td>Date</td>
        
    <td>
      <input type="date" min="2000-12-15" max="2022-05-10" name="date">
    </td></tr>
    <tr><td>Gender</td>
    <td><input type="radio" name="gen" id="m" value="Male" required><label for="m">Male</label>
    <input type="radio" name="gen" id="f"value="Female"><label for="f">Female</label>
    </td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td>
      <input type="checkbox"id="a" name="h[]" value="Play"><label for="a">Playing</label>
      <input type="checkbox"id="b" name="h[]" value="Sing"><label for="a">Singing</label><br>
      <input type="checkbox"id="c" name="h[]" value="Dance"><label for="a">Dancing</label>
      <input type="checkbox"id="d" name="h[]" value="Swim"><label for="a">Swimming</label>
    </td>
  </tr>
  
    <td>University Name</td>
    <td>
      <input type ="text" list="mylist" name="Uniname">
      <datalist id="mylist">
          <option>AKTU</option>
          <option>IMT</option>
          <option>ITM</option>
          <option>LPU</option>
          <option>VIT</option>
          <option>CSJM</option>
          <option>Thapar</option>
      </datalist>
    </td>
  </tr>
  <tr><td>CGPA</td>
   <td><input type="number" min="0" max="10" step="0.1" name="CGPA"></td>
  </tr>
  <tr><td>Time</td>
    <td><input type="time" name="Time"></td>
  </tr>
  
  <tr>
    <td>Address</td>
    <td><textarea name="address"></textarea></td>
  </tr>
  <tr>
    <td>
      <input type="submit" name="subBtn">
      <input type="reset" name="reset">
    </td>
  </tr>
  <!--Only Hidden data it is not available for user-->
   </form>
</table>
   
    </html>

    <?php
    echo "hello";
   
   //$Hobbies=array(h1,h2,h3,h4);
    $i=0;
    var_dump($_POST);
   if(isset($_POST["subBtn"]))
   {
    echo "qwert";
    
    echo "User Name: ", $_POST["username"];
    echo "Password: ", $_POST["password"];
    echo "Email: ", $_POST["email"];
    echo "Date: ", $_POST["date"];
    echo "Gender: ", $_POST["gen"];
    var_dump($_POST[h]);

    // foreach ($Hobbies as $i)
    // {
    //   echo "Hobbies: ", $_POST["i"];
    // }
    
    echo "University Name: ", $_POST["Uniname"];
    echo "CGPA: ", $_POST["CGPA"];
    echo "Address: ", $_POST["address"];

   }
    

    ?>