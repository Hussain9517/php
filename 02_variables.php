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
 $name = 'Muhammad Ali Hussain';
 echo $name;
?>
<br>
<?php
 $age = 27;
 echo $age;
?>
<br>
<?php
 $has_kids = false;
 var_dump ($has_kids);
?>
<br>
<?php
 $cash_on_hand = 27.45;
 echo $cash_on_hand;
?>
<br>
<?php
 $cash_on_hand = 27.45;
 var_dump ($cash_on_hand);
?>
<br>
<?php
 $name = 'Ali';
 $age = 27;
 echo "${name} is ${age} years old";
?>
<br>
<?php
 $x = '5' + '5';
 var_dump ($x);
?>
<br>
<?php
 echo 5 * 5 + 25 / 2  ;
?>
<br>
<?php
 define('HOST', 'Localhost');
 define ('DATABASE', 'Sql_db');
 echo DATABASE;
?>

    
</body>
</html>