<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type = "text/javascript">
      
      function myfun(){
        // var num =5;
        // console.log(num);
        
        // //num =10;
        // var num;

        // console.log(num);

        // let num =10;
        // console.log(num);
        // let num;
        // console.log(num);
        // console.log(num);// no error  prints undefined
        // var num =5;
        // console.log(num);

        // console.log(num);
        // let num =5;
        // console.log(num);
        //to read the value
        //document.myform.tx1.value;

        // let val = document.myform.tx1.value;
        // alert(val);

        //document.myform.tx1.value="Helloo.....";
        //alert(val);
        // let val = document.getElementById("txt1").value;
        // alert(val);

        document.getElementById("txt1").value="Writing with ids";

      }


    </script>
</head>
<body>
<form name="myform">  
   <input type="text" name="txt1" id="txt1">

   <input type="button" onclick ="myfun()" value="Click Me">


</form>
</body>
</html>