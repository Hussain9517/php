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
 $fruits = ['apple', 'grapes', 'oranges'];   // Simple Array 
 echo $fruits[2]; 
?>
<br>
<?php
 $fruits = array('apple', 'grapes', 'oranges');
 echo $fruits[0]; 
?>
<br>
<?php
 $fruits = ['apple', 'grapes', 'oranges'];
 var_dump ($fruits); 
?>
<br>
<?php
 $colors = [      // Associative Array
  2 => 'red',
  4 => 'blue',
  6 => 'pink'
 ];
 echo $colors[4];
?>
<br>
<?php
 $hex = [
  'red' => '#0f0',
  'blue' => '#00f',
  'green' => '#000'
 ];
 echo $hex['green'];
?>
<br>
<?php
 $student = [
  'first_name' => 'Muhammad Ali',
  'last_name' => 'Hussain',
  'age' => 27,
  'email' => 'hussain9517@hotmail.com'
 ];
 echo $student['email'];
?>
<br>
<?php
 $students = [     // Multi Dimensional Array
  [
    'first_name' => 'Muhammad Ali',
    'last_name' => 'Hussain',
    'age' => 27,
    'email' => 'hussain9517@hotmail.com'
  ],

  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'age' => 24,
    'email' => 'jane@hotmail.com'
  ],

  [
    'first_name' => 'James',
    'last_name' => 'Doe',
    'age' => 21,
    'email' => 'James@hotmail.com'
  ]

  ];
  echo $students[2]['email'];
  //var_dump (json_encode($students));
?>

</body>
</html>