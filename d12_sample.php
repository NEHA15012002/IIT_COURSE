
<?php

// $a="A";
// $b="A quick brown fox";
// $c="Lorem Lorem ipsum dolor, sit amet 
// consectetur adipisicing elit. Molestias tenetur 
// adipisci eos sed magnam laboriosam, corporis consequatur 
// recusandae, asperiores fuga numquam.
//  Laborum praesentium nam rem commodi ea tenetur nihil quo.";

//  var_dump(sha1($a));
//  print ("<br>");
//  print sha1($b);
//  print ("<br>");
//  print sha1($c);

// rand
 ?> 

<?php

//function getName() {
$a = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $randomString = '';
 
//     for ($i = 0; $i < 6; $i++) {
//         $index = rand(0, strlen($characters) - 1);
//         $randomString .= $characters[$index];
//     }
 
//     return $randomString;
// }
 
// echo getName();
$a=str_shuffle($a);
$arr=str_split($a,6);
$i=array_rand($arr);
echo $arr[$i];




?>