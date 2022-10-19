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
 $port = 8000;
 function userRegister(){
  global $port;
  //$port = 8000;
  echo "User Registered at ${port}";
 }
 userRegister();
?>
<br>
<?php
 $port = 9000;
 function userRegistered($name){
  global $port;
  echo "${name} Registered at ${port}";
 }
 userRegistered('Muhammad');
?>
<br>
<?php
 function sum($n1,$n2){
  return $n1+$n2;
 }
 $add = sum(13.5,13.5);
 echo "User Age is $add";
?>
<br>
<?php
 $multiply = fn($n1,$n2) => $n1*$n2;

 $mul = $multiply(2,4);
 echo "User Office timming start at ${mul} Clock Sharp";

?>

</body>
</html>