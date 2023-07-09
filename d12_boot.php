<?php include_once("./Header.php"); ?>
<p class="alert alert-danger">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Quaerat ipsa, mollitia harum exercitationem quisquam magni 
    qui odio sed quod soluta vero consequatur facilis, cum nulla
    rerum ex, dolores rem sequi?
</p>
<form method= 'post'>
<input type="checkbox" name='chk[]' value='A'>A
<input type="checkbox" name='chk[]' value='B'>B
<input type="checkbox" name='chk[]' value='C'>

<?php
$a = implode(",",$_POST['chk']);
echo $a;
?>
<?php
date_default_timezone_set("Asia/Kolkata");
echo date("h:i:s");
$name="Sachin";
$str = <<<test
This is here doc string $name 
<h1 align ="center" title="My heading">Demo Page 2</h1>
thus is nonsense
test;
echo $str;


?>










<?php include_once("./Footer.php"); ?>







    

