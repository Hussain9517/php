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
 $fruits = ['apple','oranges','grapes'];
 echo count($fruits);
 echo "<br>";
 echo var_dump((in_array('apple',$fruits)));
 echo "<br>";
 echo (in_array('grapes',$fruits));
 echo "<br>";
 $fruits[] = 'mango';
 echo var_dump($fruits);
 echo "<br>";
 array_push($fruits,'pineapple');
 echo var_dump($fruits);
 echo "<br>";
 array_unshift($fruits,'blueberry');
 print_r($fruits);
 echo "<br>";
 echo count($fruits);
 echo "<br>";
 array_pop($fruits);
 print_r($fruits);
 echo "<br>";
 array_shift($fruits);
 print_r($fruits);
 echo "<br>";
 unset($fruits[2]);
 print_r($fruits);
 echo "<br>";
 $chunked_array = array_chunk($fruits,2);
 print_r($chunked_array);
 echo "<br>";
 $arr1 = [1,2,3];
 $arr2 = [4,5,6];
 $arr3 = array_merge($arr1,$arr2);
 print_r($arr3);
 echo "<br>";
 $arr4 = [...$arr1,...$arr2];
 print_r($arr4);
 echo "<br>";
 $a = ['green','red','yellow'];
 $b = ['avacado','apple','banana'];
 print_r(array_combine($a,$b));
 echo "<br>";
 $c = array_combine($a,$b);
 $keys = array_keys($c);
 print_r($keys);
 echo "<br>";
 $flipped = array_flip($c);
 print_r($flipped);
 echo "<br>";
 $numberz = range(1,20);
 print_r($numberz);
 echo "<br>";
 $newNumber = array_map(function($number1) {
      return "Number ${number1}";
 }, $numberz);
 print_r($newNumber);
 echo "<br>";
 $lessThan10 = array_filter($numberz, fn($number) => $number <= 10 );
 print_r($lessThan10);
?>

</body>
</html>