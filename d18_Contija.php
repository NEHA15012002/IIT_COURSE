<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script>
        function myfun()
        { //let val = document.myform.txt1.value;
          //       document.getElementById("MyPara").innerHTML=val;
        //   alert("Hello World.....");
        //   let nm=prompt("Enter Name...", "Virat");
        //   alert(nm);
          let res= confirm("Are you Sure");
          alert(res);
          return res;

        }
        
        function inputfun()
        {
            let v=document.myform.txt1.value;
            //document.myform.txt1.value=v.toUpperCase();
            //alert(v.toUpperCase());
            let len=v.length;

            // if(len<=3)
            // {
            //     document.getElementById("a").innerText="InValid..."
            // }
            // else{
            //     document.getElementById("a").innerText="Valid..."
            // }
            let u=0,l=0,n=0,s=0;
            if(len>=8)
            {
            for(let i=0;i<len;i++)
            {
               if((v.charAt(i) >="A") &&  (v.charAt(i) <="Z"))
                 {
                    u=u+1;
                 }
                 else if((v.charAt(i) >="a") &&  (v.charAt(i) <="z"))
                 {
                    l=l+1;
                 }
                 else if((v.charAt(i) >="0") &&  (v.charAt(i) <="9"))
                 {
                    n=n+1;
                 }
                 else if((v.charAt(i)== "@" )|| (v.charAt(i)== "#")|| (v.charAt(i)== "*")||
                 (v.charAt(i)== "&")||(v.charAt(i)== "%")||(v.charAt(i)== "^")||(v.charAt(i)== "$"))
                 {
                    s=s+1;
                 }
           }
                 
             if(u>=2 && l>=3 && n>=2 &&s>=1)
                 {
                    document.getElementById("a").innerText="Valid...";
                    document.getElementById("a").style.color="green";
                 }
                 else{
               document.getElementById("a").innerText="InValid...";
               document.getElementById("a").style.color="red";
            
            }
             }
          else
        {
            document.getElementById("a").innerText="Length must be of min 8 characters";
               document.getElementById("a").style.color="red";
        }
             
        }


        function radiofun(){
            let val=document.myform.gen;
            let v="";
            for(let i=0;i<val.length;i++)
            { 
                if(val[i].checked){
                    v=val[i].value;
                }
            }
            alert(v);
        }

        function checkfun(){
            let val=document.myform.h;
            let v="";
            for(let i=0;i<val.length;i++)
            { 
                if(val[i].checked){
                    v+=val[i].value+",";
                }
            }
            alert(v.trim());
        }
        function checkall()
        {
            let val=document.myform.h;
            let v="";
            for(let i=0;i<val.length;i++)
            { 
                val[i].checked=true;
                  
            }
        }
    </script>
</head>
<body>
    <form name="myform" onsubmit="return myfun()" method="post">
     <div class="container">
        <div class='alert alert-info'>
        <input type="text" name="txt1" onkeypress="inputfun()"><span id='a'></span>
        <br >
        <button type="submit" name="subBtn" >Click Me</button>
        <p id="myPara">

        </p>
        </div>

        <div class='alert alert-warning'>
        <input type="radio" name="gen" value="Male">Male
        <input type="radio" name="gen" value="Female">Female<span id='b'></span>
        <br >
        <button type="button" onclick="radiofun()" >Click Me</button>
        </div>


        <div class='alert alert-danger'>
        <input type="checkbox"id="a" name="h" value="Play"><label for="a">Playing</label>
      <input type="checkbox"id="b" name="h" value="Sing"><label for="a">Singing</label><br>
      <input type="checkbox"id="c" name="h" value="Dance"><label for="a">Dancing</label>
      <input type="checkbox"id="d" name="h" value="Swim"><label for="a">Swimming</label>
      <br >
        <button type="button" onclick="checkfun()" >Click Me</button>
        <button type="button" onclick="checkall()" >Select All</button>
        </div>



     </div>



    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>

<?php
extract($_POST);
if(isset($subBtn))
{
   echo "Record Deleted";
}

?>