<?php
print "hello world..";
 echo "hello world","bye";

 $age=45;
 $name="anjum";

 echo "name is $name Age is $age";
 echo "name is ",$name, "age is ",$age;

 define('MyConst',1001);
 echo MyConst;


 echo PHP_VERSION;

 $val=5;
 echo $val ,gettype($val);

 
 $val=5.789;
 echo $val ,gettype($val);

 
 $val="anjum";
 echo $val ,gettype($val);

 
 $val=array(1,2,3,4);
 echo $val ,gettype($val);

 
 $val=[1,2,3,4];
 echo $val ,gettype($val);

 $val=5;
 $a="5";

 $val==$a;
 $val===$a;


 $a="hello..";
 $b="world";
 $c=$a.$b;
 echo $c;

 //(condition)? true Stmt...... : false stmt

 $a= 5;
 $b=10;
 $max =($a>$b) ? print $a: print $b;
 

// we cannot use multiple values with echo
//no value returns with echo


//print returns a value
//we can use multiple values with echo


//control statements

// if


// loops 
// continue
// break

$a=5;
if($a==0)
{
    echo "$a is Zero...";
}

else{
if($a >=0)
  { echo "Hi";
    echo "$a is Positive...";
  }

else
  echo"$a is Negative..."; 
} 

$course_name="Btech";

if($course_name=="Btech")
{
    echo "Go to Dept CS, Hod is Mr. X";
}
else if($course_name=="MBA")
{
    echo "Go to MBA Hod is Mr. Y";
}
else if($course_name=="BPhar")
{
    echo "Go to Dep BPhar, Hod is Mr. ";
}

?>