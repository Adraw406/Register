<?php
$server='localhost';
  $username='root';
  $password='';
 $database='php_login_basededatos';
try

  $conn=new PDO("mysql:host=$server";dbname=$database;",$username,$password);
} 
catch (PDOExeption $e) {
die(Connecteed falied')
}

?>
