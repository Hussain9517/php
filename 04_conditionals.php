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
 $age = 17;
 if($age >= 18){
  echo 'You are old enough to vote.';
 }
 else{
  echo 'Sorry, you are not old enough to vote.';
 }
?>
<br>
<?php
 $t = date("H");
 if($t < 12){
  echo "Good Morning!";
 }
 elseif($t < 17){
  echo "Good AfterNoon!";
 }
 else{
  echo "Good Evening";
 }
?>
<br>
<?php
 $post = ['first_post'];
 if(!empty($post)){
  echo $post[0];
 }
 else{
  echo "No Post";
 }
?>
<br>
<?php
 $posts = ['second_post'];
 $check_post = !empty($posts) ? $posts[0] : "No Post Exists";
 echo $check_post;
?>
<br>
<?php
 $fav_color = 'black';
 switch($fav_color){
  case 'red':
    echo "your favourite color is red";
    break;
  case 'pink':
    echo "your favourite color is pink";
    break;
  case 'green':
    echo "your favourite color is green";
    break;  
    default:
    echo "Your Favourite Color is not exist here.";
 }
?>
  
</body>
</html>