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
   class User {
    public $name;
    public $email;
    public $age;
    
    function set_name($name)
    {
      $this->name = $name;
    }
    function set_email($email){
      $this->email = $email;
    }
    function set_age($age){
      $this->age = $age;
    }
    function get_name(){
      return $this->name;
    }
    function get_email(){
      return $this->email;
    }
    function get_age(){
      return $this->age;
    }
   }

   $user1 =  new User();
   $user1->set_name('Muhammad Ali hussain');
   $user1->set_email('Hussain9517@hotmail.com');
   $user1->set_age(27);

   $user2 = new User();
   $user2->set_name("John Hardley");
   $user2->set_email("johnhar12@gmail.com");
   $user2->set_age(31);

   var_dump($user1);
   echo '<br>';
   var_dump($user2);
   echo '<br>';
   echo $user1->get_name();
   echo '<br>';
   echo $user1->get_email();
   echo '<br>';
   echo $user1->get_age();
   echo '<br>';
   echo $user2->get_name();
   echo '<br>';
   echo $user2->get_email();
   echo '<br>';
   echo $user2->get_age(); 
   echo '<br>';

class person{
  
  public $name;
  public $email;
  public $age;

  public function __construct($name,$email,$age){
    $this->name = $name;
    $this->email =$email;
    $this->age = $age;
  }
} 

$person1 = new person('Ali Hussain','creeper.95@gmail.com','27');
$person2 = new person('jane hadley', 'jane22@gmail.com', '22');

echo $person1->name;
echo '<br>';
echo $person1->email;
echo '<br>';
echo $person1->age;
echo '<br>';
echo $person2->name;
echo '<br>';
echo $person2->email;
echo '<br>';
echo $person2->age;


?>

</body>
</html>