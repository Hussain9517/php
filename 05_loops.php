<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
 for($x=1; $x<=10; $x++)
 echo $x; 
?>
<br>
<?php
 $y=1;
 while ($y<=9)
 {
  echo $y;
  $y++;
 }
?>
<br>
<?php
 $z=1;
 do{
  echo $z;
  $z++;
 }while($z<=8)
?>
<br>
<?php
 $posts = ['first_post', 'second_post', 'third_post'];
 foreach($posts as $index => $post){
  echo $index + 1 . '-' . $post . '<br>';
 }
?>
<br>
<?php
  $student = [
    'first_name' => 'Muhammad Ali',
    'last_name' => 'Hussain',
    'age' => 27,
    'email' => 'hussain9517@hotmail.com'
   ];
   foreach($student as $key => $value){
    echo "$key -  $value <br>";
   }
?>

</body>
</html>